@section('style')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/setPage.css')}}">
@endsection
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
            <!-- 编辑页面 -->
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12 setPage">
                        <div class="setPage-content">
                                <div class="input-err-item">
                                </div>
                                <div class="input-item">
                                    <label for="setPage-title" class="setPage-title"><i>*</i>标题:</label>
                                    <input type="text" placeholder="请输入标题" id="setPage-title">
                                </div>
                                <br/>
                                <div class="input-item">
                                    <label for="setPage-title" class="setPage-title"><i>*</i>关键词:</label>
                                    <input type="text" placeholder="请输入关键词" id="setPage-keyword">
                                </div>
                                <br/>
                                <div class="input-class-item">
                                    <label for="setPage-title" class="setPage-title"><i>*</i>分类:</label>
                                    <select class="select-class">
                                        <option value="请选择">请选择</option>
                                        <option value="分类一">分类一</option>
                                        <option value="分类二">分类二</option>
                                        <option value="分类三">分类三</option>
                                    </select>

                                </div>
                                <br/>
                                <div class="input-item">
                                    <label for="setPage-title" class="setPage-title"><i>*</i>描述:</label>
                                    <textarea class="form-control" rows="3" placeholder="描述内容" id="setPage-desc"></textarea>
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
                                    <i>上传文图片推荐尺寸最好是png或者jpg,单张照片不大于20M</i>
                                </div>
                                <br>
                                <div class="editor-con">
                                    <div id="editor"></div>
                                </div>
                                <br>
                                <button class="btn btn-primary" id="set-page-btn">点击保存</button>
                        </div>

                    </div>
                </div><!-- /row -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <div style="" class="fileGetUrl">{!! csrf_field() !!}</div>
    <div style="" class="PageUrl" data-action="{{route('WebPage.mostUploads')}}"></div>
    <div class="addPage" data-action="{{route('WebPage.addPageInfo')}}"></div>
@endsection
@section('script')
    <script type="text/javascript">
        var token = $('.fileGetUrl>input').val();
        var urlFrom = $('.PageUrl').data('action');
        var addUrl = $('.addPage').data('action');
        var editor = null;
        var page = {
            data:{
                _token:token,
                title:'',
                desc:'',
                content:'',
                keyword:'',
                type:'',
                img_path:[]
            },
            init: function () {
                this.onLoad();
                this.bindEvent();
            },
            onLoad: function () {
                //文本框初始化
                this.editor();
            },
            bindEvent: function () {
                var _this = this;
                $('#setpage-update-pic').on('change',function (e) {
                    var targetEvent =  e.target,
                        formData = new FormData();
                        formData.append("myfile",targetEvent.files[0]);
                        formData.append("_token",token);
                    _this.setPage_update_Pic(formData);
                });
                //获取标题中值
                $('#setPage-title').on('change',function () {
                    _this.data.title = $(this).val();
                });
                //获取关键字
                $('#setPage-keyword').on('change',function () {
                    _this.data.keyword = $(this).val();
                });
                //获取类型
                $('.select-class').on('change',function () {
                    _this.data.type = $(this).val();
                });
                //获取描述
                $('#setPage-desc').on('change',function () {
                    _this.data.desc = $(this).val();
                })
                //点击提交保存
                $('#set-page-btn').on('click',function () {
                    _this.data.content = editor.txt.text().toString();
                    var isStatus = _this.validateSetPage(_this.data);
                    if(isStatus.status){
                        $('.input-err-item').html('');
                        _this.data.content = editor.txt.html().toString();
                       //提交上传
                        $.ajax({
                            url:addUrl,
                            type:'POST',
                            data: _this.data,
                            success: function (res) {
                                console.log(_this.data);
                                if(res.code === 2000){
                                    alert('添加成功');
                                }
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        })
                    }else{
                        $('.input-err-item').html('<p>'+ isStatus.msg +'</p>')
                    }
                    return false;
                });

            },
            //初始化文本框方法
            editor: function () {
                var _this = this;
                //初始化文本编辑器;
                var E = window.wangEditor;
                editor = new E('#editor');
                //定义编辑器的tab栏目
                editor.customConfig.menus = [
                    'head',  // 标题
                    'bold',  // 粗体
                    'fontSize',  // 字号
                    'fontName',  // 字体
                    'italic',  // 斜体
                    'underline',  // 下划线
                    'strikeThrough',  // 删除线
                    'foreColor',  // 文字颜色
                    'backColor',  // 背景颜色
                    'link',  // 插入链接
                    'list',  // 列表
                    'justify',  // 对齐方式
                    'quote',  // 引用
                    'image',  // 插入图片
                    'code',  // 插入代码
                    'undo',  // 撤销
                    'redo' , // 重复
                    'video' //视频
                ];
                // 隐藏“网络图片”tab
                editor.customConfig.showLinkImg = false;
                //获取图片信息
                editor.customConfig.customUploadImg = function (files, insert) {
                   if(files.length){
                       _this.editor_file_pic(files,insert);
                   }
                };
                editor.create();
            },
            //文本框上传图片
            editor_file_pic: function (files,insert) {
                var  formData = new FormData();
                    formData.append('_token',token);
                    formData.append('myfile',files[0]);
                //上传图片
                $.ajax({
                    url: urlFrom,
                    type: "POST",
                    data:formData,
                    cache: false,
                    contentType: false,        //不可缺参数是
                    processData: false,        //不可缺参数
                    success: function (res) {
                        if(res.code === 2000){
                            var result = res.data;
                            insert(result[0]);
                        }else{
                            console.log('文本编辑框上传图片出现问题');
                        }
                    },
                    error: function (error) {
                        //错误
                        console.log('error',error);
                    }
                })
            },
            //上传缩率图,
            setPage_update_Pic: function (formData) {
                var _this = this;
                $.ajax({
                    url: urlFrom,
                    type: "POST",
                    data:formData,
                    cache: false,
                    contentType: false,        //不可缺参数是
                    processData: false,        //不可缺参数
                    success: function (res) {
                       if(res.code === 2000){
                           _this.data.img_path.push(res.data[0]);
                           $('#page-pic').prop('src',res.data[0]);
                       }else{
                           console.log('setPage上传缩率图出现错误');
                       }
                    },
                    error: function (error) {
                        console.log(error);
                    }
                })
            },
            //空格判断
            validateSetPage: function (data) {
                var pageInfo = {
                    msg:'',
                    status: false
                };
                if(!_mm.validate(data.title,'require')){
                    pageInfo.msg = "请输入标题";
                    pageInfo.status = false;
                }else if(!_mm.validate(data.keyword,'require')){
                    pageInfo.msg = "请输入关键词";
                    pageInfo.status = false;
                }else if(!_mm.validate(data.type,'require')){
                    pageInfo.msg = "请选择类型";
                    pageInfo.status = false;
                }else if(!_mm.validate(data.desc,'require')){
                    pageInfo.msg = "请输入描述";
                    pageInfo.status = false;
                    console.log(data.img_path.length);
                }else if(!data.img_path.length){
                    pageInfo.msg = "请上传缩率图";
                    pageInfo.status = false;
                }else if(!_mm.validate(data.content,'require')){
                    pageInfo.msg = "请输入文章内容";
                    pageInfo.status = false;
                }else{
                    pageInfo.msg = "";
                    pageInfo.status = true;
                }
                return pageInfo;
            }
        }
       $(function () {
           page.init();
       });
    </script>
@endsection
