<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sinhvien';

    public function lop()
    {
    	return $this->belongsTo('App\Lop', 'lop_id');
    }

    public function lylich()
    {
    	return $this->hasMany('App\LyLich', 'sinhvien_id');
    }

    public function profile()
    {
    	return $this->hasMany('App\LyLich', 'sinhvien_id');
    }

    public function gioitinh()
    {
        return $this->belongsTo('App\GioiTinh', 'gioitinh');
    }
}
