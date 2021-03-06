@extends('subadmin.layout.master')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page header - Tiêu đề danh sách -->
    <div class="page-header">
        <h3> Danh sách dân tộc </h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ThemMoiDanTocModal" title="Thêm mới dân tộc">
            <i class="fa fa-plus"></i> Thêm mới
        </button>
    </div>
    
    <!-- Page content - Danh sách dân tộc -->
    <div class="page-content">
        @if(isset($DanhSach_DanToc))
            @if(count($DanhSach_DanToc)>0)
                <?php $STT = '0' ?>
                <table class="table table-striped">
                     <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã dân tộc</th>
                            <th>Tên dân tộc</th>
                            <th></th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($DanhSach_DanToc as $DanToc)
                            <tr>
                                <th>{{++$STT}}</th>
                                <td>{{$DanToc->madantoc}}</td>
                                <td>{{$DanToc->tendantoc}}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#CapNhatDanTocModal" title="Sửa" onclick="CapNhatDanToc('{{$DanToc->id}}', '{{$DanToc->madantoc}}','{{$DanToc->tendantoc}}')">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger remove_dantoc" href="{{route('dantoc_destroy',['id'=>$DanToc->id])}}" Ten="{{$DanToc->tendantoc}}" title="Xóa"><i class="fa fa-remove"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ThemMoiDanTocModal" title="Thêm mới dân tộc">
                                    <i class="fa fa-plus"></i> Thêm mới
                                </button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            @else
                {{'Chưa có dữ liệu!'}}
            @endif
        @else
            {{'Không có thông tin!'}}
        @endif
    </div>

    <!-- Modal thêm mới dân tộc -->
    <div id="ThemMoiDanTocModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-11 pull-left">
                        <h3>Thêm mới dân tộc</h3>
                    </div>
                    <div class="col-1 pull-right">
                        <button type="button" class="close" data-dismiss="modal" title="Đóng Form">&times;</button>
                    </div>
                </div>
                <div class="modal-body">
                    @include('layout.block.message_validation')
                    <div class="form-group">
                        <label for="MaDanToc"> Mã dân tộc </label>
                        <input type="text" name="MaDanToc" id="MaDanToc" class="form-control" placeholder="Mã dân tộc" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="TenDanToc"> Tên dân tộc </label>
                        <input type="text" name="TenDanToc" id="TenDanToc" class="form-control" placeholder="Tên dân tộc" autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary save_dantoc" href="{{ route('post_dantoc') }}"><i class="fa fa-save" aria-hidden="true"></i> Lưu </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-remove"></i> Đóng </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal cập nhật dân tộc -->
    <div id="CapNhatDanTocModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-11 pull-left">
                        <h3>Cập nhật thông tin dân tộc</h3>
                    </div>
                    <div class="col-1 pull-right">
                        <button type="button" class="close" data-dismiss="modal" title="Đóng Form">&times;</button>
                    </div>
                </div>
                <div class="modal-body">
                    @include('layout.block.message_validation')
                    <input name="ID_DanToc_CapNhat" id="ID_DanToc_CapNhat" type="text" class="hidden" hidden="true">
                    <div class="form-group">
                        <label for="MaDanToc_CapNhat"> Mã dân tộc </label>
                        <input type="text" name="MaDanToc_CapNhat" id="MaDanToc_CapNhat" class="form-control" placeholder="Mã dân tộc" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="TenDanToc_CapNhat"> Tên dân tộc </label>
                        <input type="text" name="TenDanToc_CapNhat" id="TenDanToc_CapNhat" class="form-control" placeholder="Tên dân tộc" autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary update_dantoc" href="{{route('post_dantoc_update')}}"><i class="fa fa-save"></i> Lưu </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-remove"></i> Đóng </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    @parent
    <script type="text/javascript" src="{!! URL::asset('js/subadmin.js') !!}"></script>
    <script type="text/javascript" src="{!! URL::asset('js/alert.js') !!}"></script>
@endsection