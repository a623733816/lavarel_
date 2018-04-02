@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="page-header">
            <h1>
                网站设置
                <small>
                    <i class="icon-double-angle-right"></i>
                    页面编辑
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <a class="btn btn-primary pull-right" data-toggle="modal" data-target="#addpermission" style="margin-bottom: 10px">添加角色</a>

                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <span class="lbl">序号</span>
                                        </label>
                                    </th>
                                    <th>角色标示</th>
                                    <th>角色显示名</th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        创建时间
                                    </th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($roles as $k=>$v)
                                    <tr class="">
                                        <td class="center">
                                            <label>
                                                <span class="lbl">{{$k+1}}</span>
                                            </label>
                                        </td>

                                        <td>
                                            <a href="#">{{$v->name}}</a>
                                        </td>
                                        <td>{{$v->display_name}}</td>
                                        <td class="hidden-480">{{$v->created_at}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a data-toggle="modal"  data-target="#mmmm" class="btn btn-xs btn-info" href="{{url('admin/role/edit',['id'=>$v->id])}}">
                                                    <i class="icon-edit bigger-120">编辑</i>
                                                </a>
                                                <a class="btn btn-xs btn-danger" data-toggle="modal"  data-target="#confirm-delete" data-href="{{url('admin/role/delete',['id'=>$v->id])}}">
                                                    <i class="icon-trash bigger-120">删除</i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $roles->render() !!}
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

@endsection
@section('script')
    <script>
        $("#mmmm").on("hidden.bs.modal", function() {
            $(this).removeData("bs.modal");
        });
        $('.select2').select2({
            placeholder: "请选择权限"
        });
    </script>
@endsection
