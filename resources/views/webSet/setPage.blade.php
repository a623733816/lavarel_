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
                            <form action="" id="formBtn">
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
                                    <i>上传文图片推荐尺寸最好是png或者jpg,单张照片不大于20M</i>
                                </div>
                                <br>
                                <div class="editor-con">
                                    <div id="editor"></div>
                                </div>
                                <br>
                                <button class="btn btn-primary" id="btn1">点击保存</button>
                            </form>

                        </div>

                    </div>
                </div><!-- /row -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        var page = {
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
            },
            //文本框方法
            editor: function () {
                //初始化文本编辑器;
                var E = window.wangEditor;
                var editor = new E('#editor');
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
                //图片以base64格式提交
                editor.customConfig.uploadImgShowBase64 = true;
                //隐藏网络图片上传
                editor.customConfig.showLinkImg = false;
                editor.create();
                $('#btn1').on('click',function () {
                    var json = editor.txt.getJSON();
                    var jsonStr = JSON.stringify(json)
                    return false
                })
            }
        }
       $(function () {
           page.init();
       });
    </script>
@endsection
