<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Group extends Model
{
    use Notifiable;
    const QUAN_TRI_HE_THONG = '1';
    const CHUYEN_VIEN_HE_THONG = '2';
    const TRUONG_DON_VI = '3';
    const CHUYEN_VIEN = '4';
    const GIAO_VU_KHOA = '5';
    const CO_VAN_HOC_TAP = '6';
    const BAN_CAN_SU = '7';
    const SINH_VIEN = '8';

    protected $table = 'groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
