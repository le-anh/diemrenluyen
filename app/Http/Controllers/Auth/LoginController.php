<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceUserController;
use Socialite, Session, URL, Redirect;
use Auth;
use App\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    /**
     * Redirect the user to the Provider authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        if(!Session::has('pre_url')){
            Session::put('pre_url', URL::previous());
        }else{
            if(URL::previous() != URL::to('login')) Session::put('pre_url', URL::previous());
        }

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Provider.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $UserProviderAuth = $this->getUserAuthenticatedFromProvider($provider);

            if($UserProviderAuth)
            {
                $User = $this->findUserInDatabase($UserProviderAuth);
                if($User)
                {
                    if($this->LoginUser($User, true))
                    {
                        return $this->RedirectDashboard($User);
                    }
                }
            }
            else
                return redirect()->route('redirect-login');
            return redirect()->route('redirect-login');
        } catch (Exception $e) {
            return redirect()->route('home');
        }

        
        // return Redirect::to(Session::get('pre_url'));
    }

    public function LoginUser($user, $remember)
    {
        return Auth::loginUsingId($user->id, $remember);
    }

    // protected function RedirectDashboard($user)
    protected function RedirectDashboard()
    {
        $Permission = UserController::PermissionMaxLevelNoneId();
        $arrayPermission = ServiceUserController::PermissionList();

        if($Permission)
        {
            if($Permission == Permission::QuanTriHeThong)
                return redirect()->route('admin');

            if($Permission == env('GROUP_CHUYENVIENHETHONG'))
                return redirect()->route('admin');

            if($Permission == env('GROUP_TRUONGDONVI'))
                return redirect()->route('truongdonvi');

            if($Permission == env('GROUP_CHUYENVIEN') || $arrayPermission['chuyenvien_lop'])
                return redirect()->route('subadmin');

            if($Permission == env('GROUP_GIAOVUKHOA') || $arrayPermission['giaovukhoa'])
                return redirect()->route('giaovukhoa');

            if($Permission == env('GROUP_COVANHOCTAP') || $arrayPermission['covanhoctap'])
                return redirect()->route('covanhoctap');

            if($Permission == env('GROUP_BANCANSU') || $arrayPermission['bancansu'])
                return redirect()->route('bancansu');

            if($Permission == env('GROUP_SINHVIEN'))
                return redirect()->route('sinhvien');
        }
        else
        {
            if($arrayPermission['chuyenvien_lop'])
                return redirect()->route('subadmin');

            if($arrayPermission['giaovukhoa'])
                return redirect()->route('giaovukhoa');

            if($arrayPermission['covanhoctap'])
                return redirect()->route('covanhoctap');

            if($arrayPermission['bancansu'])
                return redirect()->route('bancansu');
        }

        try {
            Session::flush();
            Auth::logout();
            return redirect()->route('login');
        } catch (Exception $e) {
            return redirect()->route('login');
        }
    }

    protected function RedirectLogin()
    {
        if(env('PROVIDER') == "LOCAL")
            return self::LoginLocal();
        else
            $provider = env('PROVIDER');
        return self::redirectToProvider($provider);
    }

    public function LoginLocal()
    {
        return redirect()->route('login');
    }

    protected function getUserAuthenticatedFromProvider($provider)
    {
        try {
            $UserProviderAuth = Socialite::driver($provider)->stateless()->user();
        } catch (Exception $e) {
            $UserProviderAuth = "";
        }

        return $UserProviderAuth;
    }


    protected function findUserInDatabase($user)
    {
        $User = User::where('email', $user->email)
            ->where('idtrangthaiuser','=', env('TrangThaiUser_Unlock'))
            ->first();
        return $User;
    }

    public function Logout()
    {
       
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
    }
}
/**
* Class Type Permission user
*/
class Permission
{
    const QuanTriHeThong = 1;
    const ChuyenVienHeThong = 2;
    const TruongDonVi = 3;
    const ChuyenVien = 4;
    const GiaoVu = 5;
    const CoVanHocTap = 6;
    const BanCanSu = 7;
    const SinhVien = 8;
}