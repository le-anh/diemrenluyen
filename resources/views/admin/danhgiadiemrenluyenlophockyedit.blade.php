@extends('admin.layout.master')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/subadmin.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/mystyle.css')}}">
@endsection
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page header - Tiêu đề danh sách -->
    <div class="text-center">
        <h3> DANH SÁCH LỚP ĐÁNH GIÁ ĐIỂM RÈN LUYỆN</h3>
        <h4>
            {{isset($hocKyNamHoc)? $hocKyNamHoc->tenhockynamhoc : ''}}
        </h4>
    </div>
    <div class="row">

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title"> <h2>KHÓA</h2> <div class="clearfix"></div> </div>
          <div class="x_content">
            <div class="well" style="max-height: 340px; height: 340px; overflow: auto;">
              <ul class="list-group checked-list-box">
                @foreach($dsKhoaHoc ?? [] as $khoaHoc)
                  <li class="list-group-item khoahoc" value="{{$khoaHoc->id}}"> <strong> {{$khoaHoc->tenkhoahoc}} </strong></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>LỚP</h2>
            <!-- <ul class="nav navbar-right panel_toolbox">
              <li class="chk-all-class"> <i class="fa fa-check-square"></i> Chọn tất cả &nbsp; </li>
              <li class="unchk-all-class"> <i class="fa fa-square"></i> Bỏ chọn tất cả</li>
            </ul> -->
            <div class="clearfix"></div> 
          </div>
          <div class="x_content">
            <div class="well" style="max-height: 340px; height: 340px; overflow: auto;">
              <ul id="ul-lop" class="list-group checked-list-box">
                @foreach($dsLop ?? [] as $lop)
                    <li class="list-group-item lop" value="{{$lop->id}}"> {{$lop->tenlop}} </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('javascript')
  <script type="text/javascript" src="{!! URL::asset('js/ajax.js') !!}"></script>
  <script type="text/javascript" src="{!! URL::asset('js/admin_chon_lop_danh_gia.js') !!}"></script>
  <script>
    var urlRouteGetLopByKhoaHoc = "{{route('admin_getlopbykhoahoc')}}";
    $('.chk-all-class').click(function(){
      $('.lop').addClass('list-group-item-primary active');
      $('input[type="checkbox"]').prop("checked");
    });
  </script>
@endsection