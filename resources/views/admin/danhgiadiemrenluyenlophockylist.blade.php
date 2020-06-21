@extends('admin.layout.master')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/subadmin.css')}}">
  <!-- iCheck -->
  <link href="{{URL::asset('gentelella-master/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{URL::asset('gentelella-master/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('gentelella-master/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('gentelella-master/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('gentelella-master/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('gentelella-master/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page header - Tiêu đề danh sách -->
    <div class="text-center">
        <h3> DANH SÁCH LỚP ĐÁNH GIÁ THEO HỌC KỲ </h3>
        <h4>
            {{isset($boTieuChi)?$boTieuChi->tenbotieuchi:''}}
        </h4>
    </div>
    <div class="row">
        <div class="x_panel">
            <div class="x_content">
                @include('layouts.gentelella-master.blocks.flash-messages')
                <?php $STT = '0' ?>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="25%">Học kỳ</th>
                            <th width="25%" class="text-left-middle">Khóa</th>
                            <th width="45%" class="text-left-middle">Lớp</th>
                            <th width="5%" class="text-center-middle"></th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($dsHocKyNamHoc ?? [] as $hocKyNamHoc)
                            <tr>
                                <th class="text-justify-middle">{{$hocKyNamHoc->tenhockynamhoc}}</th>
                                <td class="text-left-middle">
                                  <?php $dsKhoaHoc = App\Http\Controllers\DanhGiaDiemRenLuyenLopHocKyController::getKhoaHocTheoHocKyNamHoc($hocKyNamHoc->id); ?>
                                  @foreach($dsKhoaHoc ?? [] as $khoaHoc)
                                    {{$khoaHoc->tenkhoahoc}}, 
                                  @endforeach
                                </td>
                                <td class="text-left-middle">
                                  <?php $dsLop = App\Http\Controllers\DanhGiaDiemRenLuyenLopHocKyController::getLopTheoHocKyNamHoc($hocKyNamHoc->id); ?>
                                  @foreach($dsLop ?? [] as $lop)
                                    {{$lop->tenlop}}, 
                                  @endforeach
                                </td>
                                <td class=text-center-middle>
                                  @if(in_array($hocKyNamHoc->idtrangthaihocky, [2,3]))
                                    <a href="{{route('admin_danhgiadrllophocky_edit', ['idhockynamhoc' => $hocKyNamHoc->id])}}" class="btn btn-warning" title="Chỉnh sửa"> <i class="fa fa-edit"></i> </a>
                                  @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <!-- iCheck -->
    <script src="{{URL::asset('gentelella-master/vendors/iCheck/icheck.min.js')}}"></script>
    <script type="text/javascript" src="{!! URL::asset('js/ckeditor/ckeditor.js') !!}"></script>
    <script type="text/javascript" src="{!! URL::asset('js/ckfinder/ckfinder.js') !!}"></script>
    <!-- Datatables -->
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('gentelella-master/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
@endsection