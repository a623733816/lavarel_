
@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="page-header">
            <h1>
                网站设置
                <small>
                    <i class="icon-double-angle-right"></i>
                    首页banner
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


                                    </ul>
                                </div>
                            @endif
                            <a href="{{route('WebPage.addBannerView')}}" class="btn btn-primary pull-right" style="margin-bottom: 10px">点击添加</a>
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <span class="lbl">序号</span>
                                        </label>
                                    </th>
                                    <th>banner名称</th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        创建时间
                                    </th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($banner_info as $k=>$v)
                                <tr class="">
                                    <td class="center">
                                        <label>
                                            <span class="lbl">{{$k+1}}</span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">{{$v->name}}</a>
                                    </td>
                                    <td class="hidden-480">{{$v->created_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a data-toggle="modal"  data-target="#mmmm" class="btn btn-xs btn-info" href="{{route('WebPage.editBannerView',['id'=>$v->id])}}">
                                                <i class="icon-edit bigger-120">修改</i>
                                            </a>
                                            <a  class="btn btn-xs btn-danger bannerDelete" data-delete="{{route('WebPage.deleteBanner',['id'=>$v->id])}}">
                                                <i class="icon-trash bigger-120">删除</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                                {!! $banner_info->render() !!}
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <form action="{{route('admin.user')}}" method="post" class="form-horizontal">
                <div class="modal-body">
                        <div class="modal-body">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 用户名:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" id="form-field-1" placeholder="用户名" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" id="form-field-1" name="email" placeholder="Email" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">密码:</label>
                                <div class="col-sm-9">
                                    <input type="password" id="form-field-1" name="password" placeholder="密码" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">确认密码:</label>
                                <div class="col-sm-9">
                                    <input type="password" id="form-field-1" name="password_confirmation" placeholder="确认密码" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal edit远程数据-->
    <div class="modal fade" tabindex="-1" role="dialog" id="mmmm" aria-labelledby="myModalLabel">
    </div>
    <!-- Modal 远程数据-->
    <div style="display: none" id="">{{route('WebPage.mostUploads')}}</div>
@endsection
@section('script')
    <script>
        var page = {
            init: function () {
            this.bindEvent();
            },
            bindEvent:function () {
                //删除banner图片
                $('.bannerDelete').on('click',function () {
                    var isDelete = confirm('你确定要删除吗');
                    var deleUrl = $(this).data('delete');
                    if(isDelete){
                        //删除banner数据
                        $.ajax({
                            type: "GET",
                            url:deleUrl,
                            success: function (res) {
                                if(res.code === 2000){
                                    window.location.reload(true);
                                }else{
                                    alert(res.msg);
                                }
                            }
                        });
                    }
                })
            }
        }
        $(function () {
            page.init();
        })

    </script>
@endsection