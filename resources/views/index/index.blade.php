@extends('index.lay')

@section('body')
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
                        <p class="line"><input type="text" name="name" class="inputText" id="listName" placeholder="联系人"/>
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
    <link rel="stylesheet" type="text/css" href="css/indexAnimate.css"/>
    <!-- banner -->
    <div class="banner">
        <div class="contents">
            @foreach($banner_data as $k=>$v)
                <a href="#">
                    <div class="content" style="background-image:url({{$v->img_path}})">
                    </div>
                </a>
            @endforeach
        </div>
        <div class="bannerNav"></div>
        <img class="bannerBtn leftBtn" onclick="bannerBtnClick('-')"
             src="{{URL::asset('assets/images/images/bannerLeft.png')}}"/>
        <img class="bannerBtn rightBtn" onclick="bannerBtnClick('+')"
             src="{{URL::asset('assets/images/images/bannerRight.png')}}"/>
        <img class="bannerBg" src="{{URL::asset('assets/images/images/bannerBg.jpg')}}"/>
    </div>
    <!-- banner over -->
    <!-- newActive -->
    <div class="newActive">
        <div class="container">
            @foreach($zuixin_data as $v)
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
            {{--<div class="content">--}}
                {{--<div class="left">--}}
                    {{--<img src="{{URL::asset('assets/images/images/indexNewest.jpg')}}" alt=""/>--}}
                {{--</div>--}}
                {{--<div class="right">--}}
                    {{--<div class="category">Newest</div>--}}
                    {{--<div class="title">叩开通往国家品牌的大门</div>--}}
                    {{--<div class="text">--}}
                        {{--今天中国经济的发展，比任何时候都需要一批能够在全球市场上代表国家形象来参与商业竞争、文化交流的国家品牌，“品牌战略”已上升为国家战略。发挥品牌引领作用，推进品牌建设，必须聚焦现代企业的成长潜力。现代企业，尤其是中小企业，是中国经济的脊梁，是推动中国经济社会发展的重要力量。--}}
                    {{--</div>--}}
                    {{--<a href="{{URL::asset('detail/1')}}">--}}
                    {{--<div class="linkBtn">--}}
                        {{--<span>全文&nbsp;&nbsp;→</span>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="content">--}}
                {{--<div class="left">--}}
                    {{--<img src="{{URL::asset('assets/images/images/indexFocus.jpg')}}" alt=""/>--}}
                {{--</div>--}}
                {{--<div class="right">--}}
                    {{--<div class="category">Focus</div>--}}
                    {{--<div class="title">重点品牌入选范围包含</div>--}}
                    {{--<div class="text">--}}
                        {{--企业品牌、产品品牌、成长性品牌、自主创新品牌、中华老字号品牌、旅游区域品牌。其中包括：食品、养生保健、餐饮、建材建筑装饰、农业、服装、轻工、电子商务、医药、汽车及配件制造、印刷、包装、礼品、金融业、信息技术、商业零售等行业。--}}
                    {{--</div>--}}
                    {{--<div class="linkBtn">--}}
                        {{--<span>全文&nbsp;&nbsp;→</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="content">--}}
                {{--<div class="left">--}}
                    {{--<img src="{{URL::asset('assets/images/images/indexInterview.jpg')}}" alt=""/>--}}
                {{--</div>--}}
                {{--<div class="right">--}}
                    {{--<div class="category">Interview</div>--}}
                    {{--<div class="title">培育方向与入选品牌权益</div>--}}
                    {{--<div class="text">--}}
                        {{--入选品牌代表了改革开放40年来企业品牌建设的高质量品牌成果，荣誉证书和证牌统一制作、编号和颁发。企业可使用统一的荣誉标识刊登广告和宣传。同时将在品牌价值提升，品牌商业化和品牌产权资本化等方面获得精准服务对接，由国家品牌战略研究智库提供一对一帮扶，助力成就国家品牌。--}}
                    {{--</div>--}}
                    {{--<div class="linkBtn">--}}
                        {{--<span>全文&nbsp;&nbsp;→</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <!-- newActive over -->
    <!-- declare
    <div class="main">
       <div class="mainChild" id="mainChild1">
        <div class="container">
         <p class="mainsTitle">改革开放以来品牌建设的高质量成果</p>
         <div class="mainSub"></div>
         <p class="mainsTitleRed">品牌实力具有代表性、权威性、标志性</p>
         <p class="mainsInfo">根据《全国重点示范品牌评定标准和实施细则》规定，入选品牌是指能够代表中国改革开放四十周年品牌成果，在行业内具有领军示范作用的高质量品牌。
    评选工作将严格参照国家认监委颁布的我国首部品牌评价国家标准评审，所有申报单位的参选品牌都必须经过第三方权威机构发布公示。</p>
         <div class="content">
          <a href="./detail.html">
           <div class="child">
            <p class="childTitle">评定标准和实施细则</p>
            <p class="childTitleEn">Standard&Rule</p>
            <div class="childSub"></div>
            <p class="childMun">申报必读</p>
           </div></a>
          <a href="./detail.html">
           <div class="child">
            <p class="childTitle">申报流程</p>
            <p class="childTitleEn">Technological process</p>
            <div class="childSub"></div>
            <p class="childMun">申报必读</p>
           </div></a>
          <a href="./detail.html">
           <div class="child">
            <p class="childTitle" >入选品牌<br>三大权限</p>
            <p class="childTitleEn">Rights and interests</p>
            <div class="childSub"></div>
            <p class="childMun">申报必读</p>
           </div></a>
          <a href="./detail.html">
           <div class="child">
            <p class="childTitle">索取申报表</p>
            <p class="childTitleEn">Declaration form</p>
            <div class="childSub"></div>
            <p class="childMun">申报必读</p>
           </div></a>
         </div>
         <a href="./detail.html">
          <div class="linkBtn">
           <span>查看更多信息</span>
          </div></a>
        </div>
       </div>
      </div>
    declare over-->
    <!-- breed -->
    <div class="breed">
        <div class="container">
            <a href="javascript:(0);">
                <img src="{{URL::asset('assets/images/images/indexBreed.jpg')}}" alt=""/>
            </a>
        </div>
    </div>
    <!-- breed over -->
    <!-- person -->
    <div class="person">
        <div class="container">
            <a href="{{URL::asset('superiority')}}">
                <img src="{{URL::asset('assets/images/images/indexPerson.jpg')}}" alt=""/>
            </a>
        </div>
    </div>
    <!-- person over -->
    <!-- work -->
    <div class="work">
        <p class="mainTitle">重点品牌</p>
        <p class="mainTitle mainTitleSize mainTitleColor">national key brand</p>
        <div class="mainSub"></div>
        <span class="mainInfo">充分发挥政府政策的引导作用</span>
        <span class="mainInfo mainTitleColor">支持重点品牌进入国家品牌计划</span>
        <div class="content">
            @foreach($zhongdian_data as $v)
                <a href="{{URL::asset('detail/'.$v->id)}}">
                <div class="child">
                <img class="childImg" src="{{$v->img_path}}"/>
                <div class="childHide">
                <img src="{{$v->f_img_path}}"/>
                </div>
                </div>
                </a>
                @endforeach
            {{--<a href="{{URL::asset('detail/'.$v->id)}}">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1499499098.jpg')}}"/>--}}
                    {{--<div class="childHide">--}}
                        {{--<img src="{{URL::asset('assets/images/images/brandMask.jpg')}}"/>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1497520017.jpg')}}"/>--}}
                    {{--<div class="childHide">--}}
                        {{--<img src="{{URL::asset('assets/images/images/brandMask.jpg')}}"/>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1454383338.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1454311379.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1454311843.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1454381491.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1471259608.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1433514448.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1471576431.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1438242091.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1438266406.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1438093006.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1433309385.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1433310187.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<div class="child">--}}
                    {{--<img class="childImg" src="{{URL::asset('assets/images/images/1438610389.jpg')}}"/>--}}
                {{--</div>--}}
            {{--</a>--}}
        </div>
        <a href="{{URL::asset('project')}}">
            <div class="indexLinkBtn">
                <span>查看更多&nbsp;&nbsp;&nbsp;&nbsp;→</span>
            </div>
        </a>
    </div>
    <!-- work over -->
    <!-- service -->
    <div class="service">
        <div class="container">
            <a href="{{URL::asset('partner')}}">
                <img src="{{URL::asset('assets/images/images/indexService.jpg')}}" alt=""/>
            </a>
        </div>
    </div>
    <!-- service over -->
    <!-- contactUs  -->
    <div class="contactUs">
        <div class="container">
            <div class="left">
                <form action="{{route('index.addCustomerInfo')}}" method="post">
                    <p class="titleCn">项目合作</p>
                    <p class="titleEn">project cooperation</p>
                    {!! csrf_field() !!}
                    <p class="line"><input type="text" name="company" class="inputText" id="listCompany1"
                                           placeholder="企业名称"/></p>
                    <p class="line"><input type="text" name="address_detail" class="inputText" id="listArea1"
                                           placeholder="行业地区"/></p>
                    <p class="line"><input type="text" name="name" class="inputText" id="listName1" placeholder="联系人"/>
                    </p>
                    <p class="line"><input type="text" name="phone" class="inputText" id="listPhone1"
                                           placeholder="联系电话"/></p>
                    <p class="line">
                        <input type="button" class="inputBtn contactSubmit" value="立即提交"/>
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
    <!-- contactUs over -->
    <!-- brand plan
<div class="service brandPlan">
    <div class="container">
        <p class="mainTitle mainInfo">品牌计划</p>
        <div class="mainSub"></div>
        <span class="mainInfo">赤风服务</span>
        <div class="content">
            <div class="childImg fl">
                <img src="{{URL::asset('assets/images/images/1433310187.jpg')}}" alt="" />
            </div>
            <div class="childContent fr">
               <div class="title">
                   <p>准备好了吗？</p>
                   <p>你就是品牌明星</p>
                   <span>Are you ready? You're the brand star.</span>
               </div>
               <ul>
                   <li>品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现</li>
               </ul>
            </div>
        </div>
        <div class="content">
            <div class="childImg fr">
                <img src="{{URL::asset('assets/images/images/1433310187.jpg')}}" alt="" />
            </div>
            <div class="childContent fl">
               <div class="title">
                   <p>准备好了吗？</p>
                   <p>你就是品牌明星</p>
                   <span>Are you ready? You're the brand star.</span>
               </div>
               <ul>
                   <li>品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现品牌表现</li>
               </ul>
            </div>
        </div>
    </div>
</div>
brand plan over -->
    <!-- footer -->
@endsection
