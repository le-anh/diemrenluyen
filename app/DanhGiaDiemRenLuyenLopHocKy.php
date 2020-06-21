<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhGiaDiemRenLuyenLopHocKy extends Model
{
    protected $table = 'danhgiadrllophocky';

    public function khoahoc()
    {
        return $this->hasMany('App\KhoaHoc', 'khoahoc_id');
    }

    public function lop()
    {
        return $this->hasMany('App\Lop', 'lop_id');
    }
}
