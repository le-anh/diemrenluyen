<?php

namespace App\Http\Controllers;

use App\DanhGiaDiemRenLuyenLopHocKy;
use Illuminate\Http\Request;
use App\HocKyNamHoc;
use App\HocKyNamHocBoTieuChi;
use App\KhoaHoc;

class DanhGiaDiemRenLuyenLopHocKyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function adminindex()
    {
        return view ('admin.danhgiadiemrenluyenlophockylist', [
            'dsHocKyNamHoc' => HocKyNamHoc::orderBy('id', 'desc')->get()
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DanhGiaDiemRenLuyenLopHocKy  $danhGiaDiemRenLuyenLopHocKy
     * @return \Illuminate\Http\Response
     */
    public function show(DanhGiaDiemRenLuyenLopHocKy $danhGiaDiemRenLuyenLopHocKy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DanhGiaDiemRenLuyenLopHocKy  $danhGiaDiemRenLuyenLopHocKy
     * @return \Illuminate\Http\Response
     */
    public function edit(DanhGiaDiemRenLuyenLopHocKy $danhGiaDiemRenLuyenLopHocKy)
    {
        //
    }

    public function adminedit($hocKyNamHocId)
    {
        return view ('admin.danhgiadiemrenluyenlophockyedit', [
            'hocKyNamHoc' => HocKyNamHoc::find($hocKyNamHocId),
            'dsKhoaHoc' => KhoaHoc::orderBy('id', 'desc')->get(),
            'dsKhoaHocDuocChon' => self::getKhoaHocTheoHocKyNamHoc($hocKyNamHocId)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DanhGiaDiemRenLuyenLopHocKy  $danhGiaDiemRenLuyenLopHocKy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DanhGiaDiemRenLuyenLopHocKy $danhGiaDiemRenLuyenLopHocKy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DanhGiaDiemRenLuyenLopHocKy  $danhGiaDiemRenLuyenLopHocKy
     * @return \Illuminate\Http\Response
     */
    public function destroy(DanhGiaDiemRenLuyenLopHocKy $danhGiaDiemRenLuyenLopHocKy)
    {
        //
    }

    public static function getKhoaHocTheoHocKyNamHoc($hocKyNamHocId)
    {
        try {
            $dsKhoaHoc = HocKyNamHocBoTieuChi::where('hockynamhoc_id', '=', $hocKyNamHocId)
                ->join('danhgiadrllophocky', 'danhgiadrllophocky.hockynamhocbotieuchi_id', '=', 'hockynamhocbotieuchi.id')
                ->leftjoin('khoahoc', 'khoahoc.id', '=', 'danhgiadrllophocky.khoahoc_id')
                ->select('khoahoc.*')
                ->groupBy('khoahoc.id')
                ->get();
            return $dsKhoaHoc;
        } catch (\Throwable $th) {
            return [];
        }
    }

    public static function getLopTheoHocKyNamHoc($hocKyNamHocId)
    {
        try {
            $dsLop = HocKyNamHocBoTieuChi::where('hockynamhoc_id', '=', $hocKyNamHocId)
                ->join('danhgiadrllophocky', 'danhgiadrllophocky.hockynamhocbotieuchi_id', '=', 'hockynamhocbotieuchi.id')
                ->leftjoin('lop', 'lop.id', '=', 'danhgiadrllophocky.lop_id')
                ->select('lop.*')
                ->groupBy('lop.id')
                ->get();
            return $dsLop;
        } catch (\Throwable $th) {
            return [];
        }
    }
}
