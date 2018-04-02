@extends('layouts.app')

@section('content')
    <style type="text/css">
        .setPage{
        }
        .setPage-content{
            width: 708px;
            margin: 0 auto;
        }
        .setPage-content .page-id{
            font-size: 20px;
        }
        .setPage .input-item label{
            display: inline-block;
            width: 80px;
        }
        .setPage .input-item label i{
            color: red;
        }
        .setPage .input-item input{
            display: inline-block;
            width: 400px;
            height: 30px;
            border-radius: 6px !important;
        }
        .setPage .input-item textarea{
            display: inline-block;
            resize: none;
            width: 400px;
            border-radius: 6px !important;
        }
        .setPage .input-class-item .setPage-title{
            display: inline-block;
            width: 80px;
        }
        .setPage .input-class-item .setPage-title i{
            color: red;
        }
        .setPage .input-class-item .select-class{
            display: inline-block;
            width: 400px;
        }
        .setPage .input-file .update-file-pic{
            width: 484px;
            height: 150px;
            background-color: #c7c7c7;
            position: relative;
        }
        .setPage .input-file .update-file-pic .setpage-update-pic{
            margin: 0;
            display: block;
            width: 100%;
            height: 150px;
            background-color: transparent;
            text-align: center;
            line-height: 150px;
            cursor: pointer;
            position: absolute;
            left: 0;
            top: 0;
        }
    </style>
    <div class="page-content">
        <div class="page-header">
            <h1>
                网站设置
                <small>
                    <i class="icon-double-angle-right"></i>
                    页面设置
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

                            <a class="btn btn-primary pull-right" style="margin-bottom: 10px">点击添加</a>
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <span class="lbl">序号</span>
                                        </label>
                                    </th>
                                    <th>标题</th>
                                    <th>类型</th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        创建时间
                                    </th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($web_page_info as $k=>$v)
                                <tr class="">
                                    <td class="center">
                                        <label>
                                            <span class="lbl">{{$k+1}}</span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">{{$v->title}}</a>
                                    </td>
                                    <td>{{$web_page_type[$v->type]}}</td>
                                    <td class="hidden-480">{{$v->created_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a data-toggle="modal"  data-target="#mmmm" class="btn btn-xs btn-info" href="{{route('WebPage.editPageView',['id'=>$v->id])}}">
                                                <i class="icon-edit bigger-120">修改</i>
                                            </a>
                                            <a class="btn btn-xs btn-danger" data-toggle="modal"  data-target="#confirm-delete" data-href="{{route('WebPage.deletePage',['id'=>$v->id])}}">
                                                <i class="icon-trash bigger-120">删除</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                                {!! $web_page_info->render() !!}
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->
                <!-- 编辑页面 -->
                <div class="row">
                    <div class="col-xs-12 setPage">
                        <div class="setPage-content">
                            <form action="">
                                <div>
                                    <span class="page-id">ID: <i>123456</i> </span>
                                </div>
                                <br/>
                                <div class="input-item">
                                    <label for="setPage-title" class="setPage-title"><i>*</i>标题:</label>
                                    <input type="text" placeholder="请输入标题" id="setPage-title">
                                </div>
                                <br/>
                                <div class="input-item">
                                    <label for="setPage-title" class="setPage-title"><i>*</i>关键词:</label>
                                    <input type="text" placeholder="请输入关键词" id="setPage-title">
                                </div>
                                <br/>
                                <div class="input-class-item">
                                    <label for="setPage-title" class="setPage-title"><i>*</i>分类:</label>
                                    <select class="select-class">
                                        <option>分类一</option>
                                        <option  selected>分类二</option>
                                        <option>分类三</option>
                                    </select>

                                </div>
                                <br/>
                                <div class="input-item">
                                    <label for="setPage-title" class="setPage-title"><i>*</i>描述:</label>
                                    <textarea class="form-control" rows="3" placeholder="描述内容"></textarea>
                                </div>
                                <br/>
                                <div class="input-file">
                                    <div class="update-file-pic">
                                        <img src="" alt="" id="page-pic">
                                        <label for="setpage-update-pic" class="setpage-update-pic">
                                            点击上传图片
                                        </label>
                                    </div>
                                    <input type="file" id="setpage-update-pic" value="选择文件" style="display: none;">
                                    <i>上传文图片推荐尺寸800*350,单张照片不大于20M</i>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection
@section('script')
    <script>
        $("#mmmm").on("hidden.bs.modal", function() {
            $(this).removeData("bs.modal");
        });
        $('.input-class-item').on('click',function () {
            $('.class-list-ul').toggleClass('active');
        });
        $('.class-list-ul').on('click','li',function () {
            var text = $(this).text();
            $('.class-list').append(text);
        })
        $('#setpage-update-pic').on('change',function () {
            var file = this.files[0];
            var el = $(".update-file-pic").get(0);
            readFile(file,function(data){
                //imgdata base64编码文本
            });
        });




        //封装的图片获取的方法
        function readFile(file,callback) {
            //        新建阅读器
            var reader = new FileReader();
            //        根据文件类型选择阅读方式
            switch (file.type){
                case 'image/jpg':
                case 'image/png':
                case 'image/jpeg':
                case 'image/gif':
                    reader.readAsDataURL(file);
                    break;
            }
            //        当文件阅读结束后执行的方法
           reader.addEventListener('load',function () {
                //         如果说让读取的文件显示的话 还是需要通过文件的类型创建不同的标签
                switch (file.type){
                    case 'image/jpg':
                    case 'image/png':
                    case 'image/jpeg':
                    case 'image/gif':
                        var img = document.getElementById('page-pic');
                        img.src = reader.result;
                        img.style.width = '100%';
                        img.style.height  = '150px'
                        callback&&callback(reader.result);
                        break;
                }
            });

        }
    </script>
@endsection