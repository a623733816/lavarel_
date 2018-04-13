@extends('index.lay')

@section('body')
    <?php $active = 'superiority' ?>
    <!-- header over-->
    <div class="stance"></div>
    <!-- list -->
    <div class="list">
        <div class="contactUs">
            <div class="container">
                <div class="left">
                    <form action="{{route('index.addCustomerInfo')}}" method="post">
                        <p class="titleCn">项目合作</p>
                        <p class="titleEn">project cooperation</p>
                        {!! csrf_field() !!}
                        <p class="line"><input type="text" name="company" class="inputText" id="listCompany"
                                               placeholder="企业名称"/></p>
                        <p class="line"><input type="text" name="address_detail" class="inputText" id="listArea"
                                               placeholder="行业地区"/></p>
                        <p class="line"><input type="text" name="name" class="inputText" id="listName"
                                               placeholder="联系人"/>
                        </p>
                        <p class="line"><input type="text" name="phone" class="inputText" id="listPhone"
                                               placeholder="联系电话"/></p>
                        <p class="line">
                            <input type="button" class="inputBtn contactSubmitTop" value="立即提交"/>
                        </p>
                    </form>
                </div>
                <div class="right">
                    <p class="title">关于项目</p>
                    <p class="info">
                        1、大会冠名、大会演讲、大会新闻直播、专家辅导、媒体宣传、品牌展示等；<br/>
                        2、品牌策划和营销咨询、招商策划和推广、客户开发、销售渠道管理、政府文创项目财政扶持等方面精准对接等；<br/>
                        3、参加复旦大学华商研究中心和上海师范大学联合开设的《国家品牌战略研究总裁班》高级课程学习（为期一年）;<br/>
                        4、在申报国家品牌认证等需要将得到“直通车”贴心把脉，精准对接辅导服务的；<br/>
                        5、发现并具有推荐渠道的……</br>
                    </p>
                    <p class="contactInfo"><span class="sign">★</span> 更多项目合作请联系：</p>
                    <p class="contactInfo">咨询电话<span></span>021-63453030</p>
                    <p class="contactInfo">监督电话<span></span>021-64089816</p>
                    <p class="contactInfo">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱<span></span>ssd@vip.163.com</p>
                </div>
            </div>
            <!--表单弹窗-->
            <div class="formInfo">
                <div class="mask"></div>
                <div class="info">信息提交失败。<br/>请您重新填写，谢谢！</div>
            </div>
        </div>
        <img id="listCloseBtn" src="{{URL::asset('assets/images/images/closeIcon.png')}}"/>
    </div>
    <!-- list over -->
    <!-- banner -->
    <div class="banner" style="background-image:url({{URL::asset('upload/banner/other/peopleBanner.jpg')}});">
        <img class="bannerBg" src="{{URL::asset('assets/images/images/otherBannerBg.jpg')}}"/>
    </div>
    <!-- banner over -->
    <!-- main -->
    <div class="newActive" id="main">
        <div class="container">

            @foreach($lingjun_data as $v)
                <div class="content">
                    <div class="left">
                        <img src="{{$v->img_path}}" alt=""/>
                    </div>
                    <div class="right">
                        <div class="category">{{$v->keyword}}</div>
                        <div class="title">{{$v->title}}</div>
                        <div class="text">
                            {{$v->desc}}
                        </div>
                        <a href="{{URL::asset('detail/'.$v->id)}}">
                            <div class="linkBtn">
                                <span>全文&nbsp;&nbsp;→</span>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

            <a href="">
                <div class="linkBtn">
                    <span>了解更多&nbsp;&nbsp;&nbsp;&nbsp;→</span>
                </div>
            </a>
        </div>
    </div>
    <!-- main over -->
    <!-- footer -->
@endsection