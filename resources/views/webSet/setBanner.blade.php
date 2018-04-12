@section('style')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bannerSet.css')}}">
@endsection
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
                        <!--  banner编辑页面 --->
                            <div class="bigk">
                                <div class="banner-error-msg">
                                </div>
                                <div class="banner-input-item">
                                    <label for=""><i>*</i>请输入标题:</label>
                                    <input type="text" placeholder="请输入上传图片的名字" id="set-banner-title">
                                </div>
                                <br/>
                                <div class="banner-input-item">
                                    <label for=""><i>*</i>描述:</label>
                                    <textarea class="form-control" rows="3" placeholder="图片描述内容" style="resize: none;" id="set-banner-des"></textarea>
                                </div>
                                <br/>
                                <div class="kuang">
                                    <div class="addhao">
                                        <input type="file" id="bannerFile" style="visibility: hidden;">
                                    </div>
                                    <div class="on onPic">
                                    </div>
                                    <div class="set">
                                        <label for="bannerFile">点击图片上传</label>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <p><span style="color:red;">限制条件：可自行增减设置；</span>如：支持jpg/pngeg格式，单张照片不大于20M，单次上传，请尽量正确格式的图片</p>
                                <br/>
                                <div class="banner-btn-sublime">
                                    <a href="javascript:;" class="pull-left btn btn-primary" id="banner-sublime">提交并保存</a>
                                </div>
                            </div>  <!-- bigk -->
                    </div><!-- /span -->
                </div><!-- /row -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

    <!-- Modal 远程数据-->

    <div style="" id="fileGetUrl">{!! csrf_field() !!}</div>
    <div style="" class="formUrl" data-action="{{route('WebPage.mostUploads')}}"></div>
    <div class="addBanner" data-action="{{route('WebPage.addBannerInfo')}}"></div>
@endsection
@section('script')
    <script type="text/javascript">
        var page= {
            init: function () {
                this.bindEvent();
            },
            bindEvent: function () {
                var _this = this;
                //token
                var token = $('#fileGetUrl>input').val()
                var dataForm = {
                   name:'',
                   keyword:'',
                   img_path: []
                };
                //获取bannerTitle
                $('#set-banner-title').on('change',function () {
                    dataForm.name = $.trim($(this).val());
                });
                //获取bannerdes
                $('#set-banner-des').on('change',function () {
                    dataForm.keyword = $.trim($(this).val());
                });
                    //获取图片data
                $(" #bannerFile").change(function (e) {
                    var targetEvent =  e.target,
                         formData = new FormData();
                         formData.append("myfile",targetEvent.files[0]);
                         formData.append("_token",token);
                    var urlFrom = $('.formUrl').data('action');
                    //图片上传
                     $.ajax({
                         url:urlFrom,
                         type:'POST',
                         data:formData,
                         cache: false,
                         contentType: false,        //不可缺参数是
                         processData: false,        //不可缺参数
                         success:function(res){
                            var result = res.data;
                            if(result.length){
                                var picUrl = result[0];
                                dataForm.img_path.push(picUrl);
                                $('.onPic').html('<img src="'+ picUrl+'"/>')
                            }else{
                                _mm.errorTips("图片上传路径获取出现了错误");
                            }
                         },
                         error:function(err){
                         console.log(err);
                         }
                     });
                });
                //验证的判断
                $('#banner-sublime').on('click',function () {
                    var isStatus = _this.validateSetBanner(dataForm);
                    if(isStatus.status){
                        //提交数据到后台
                        var addBannerUrl = $('.addBanner').data('action');
                        //添加token
                        dataForm._token = token;
                        console.log(dataForm);
                        $.ajax({
                            type:"POST",
                            url:addBannerUrl,
                            data:dataForm,
                            success: function (res) {
                                if(res.code === 2000){
                                    window.location.href  = '/admin/banner';
                                }else{
                                    alert(res.msg);
                                }
                            },
                            error:function (error) {
                                console.log('err',error);
                            }
                        })
                    }else{
                        $('.banner-error-msg').html('<p>'+isStatus.msg+'</p>')
                    }
                })

            },
            //验证的方法
            validateSetBanner:function (data) {
                var bannerInfo = {
                     msg: '',
                    status:false
                }
                 if(!_mm.validate(data.name,'require')){
                    bannerInfo.msg = "请输入标题";
                    bannerInfo.status =  false;
                 }else if(!_mm.validate(data.keyword,'require')){
                     bannerInfo.msg = "描述不能为空";
                     bannerInfo.status =  false;
                 }else if(!data.img_path.length){
                     bannerInfo.msg = "需要上传图片";
                     bannerInfo.status =  false;
                 }else{
                     bannerInfo.msg = "可以提交了";
                     bannerInfo.status = true
                 }
                 return bannerInfo

            }

        }
        $(function () {
            page.init();
        });

    </script>
@endsection