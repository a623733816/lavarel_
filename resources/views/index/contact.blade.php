@extends('index.lay')

@section('body')
<!-- header over-->
<div class="stance"></div>
<!-- list -->
<div class="list" style="display:none;">
    <div class="container">
        <div class="left">
            <span class="redTitle">Hi,are you ready?</span>
            <p class="title">申报期限将近<br />请抓紧登录“申报通道”</p>
            <p class="info">有一个品牌项目想和我们谈谈吗?您可以填写右边的表格，让我们了解您的项目需求，这是一个良好的开始，我们将会尽快与你取得联系。当然也欢迎您给我们写信或是打电话，让我们听到你的声音!</p>
            <div class="footTitle">
                <span class="titleB"></span>
                <span>申报服务专员</span>
            </div>
            <p class="info">电 话：+021-63453030</p>
        </div>
        <div class="right">
            <p class="title">申报通道</p>
            <p class="line"><input type="text" class="inputText" id="listCompany" value="公司名称" /></p>
            <p class="line"><input type="text" class="inputText" id="listShop" value="品牌名称" /></p>
            <p class="line"><input type="text" class="inputText" id="listName" value="联系人" /></p>
            <p class="line"><input type="text" class="inputText" id="listPhone" value="联系电话" /></p>
            <p class="line"><input type="text" class="inputText" id="listEmail" value="联系邮箱" /></p>
            <p class="line"><input type="button" onclick="contactSubmit('/Home/Public/contact_submit.html',$('#listName').val(),$('#listCompany').val(),$('#listEmail').val(),$('#listTitle').val(),$('#listInfo').val())" class="inputBtn" value="立即提交" /></p>
        </div>
    </div>
    <img id="listCloseBtn" src="{{URL::asset('assets/images/images/closeIcon.png')}}"/></div>
<!-- list over -->
<!-- banner -->
<div class="banner" style="background-image:url({{URL::asset('upload/banner/other/contactBanner.jpg')}});">
    <img class="bannerBg" src="{{URL::asset('assets/images/images/otherBannerBg.jpg')}}"/>
</div>
<!-- banner over -->
<!-- icon  -->
<div class="contactIcon">
    <div class="icon">
        <img src="{{URL::asset('assets/images/images/2dCode.jpg')}}" alt=""/>
        <span>关注微信了解更多</span>
    </div>
    <div class="icon">
        <img src="{{URL::asset('assets/images/images/1432290251.jpg')}}" alt=""/>
        <span>添加微信掌握一手咨询</span>
    </div>
    <div class="icon">
        <img src="{{URL::asset('assets/images/images/contactIcon.jpg')}}" alt=""/>
        <span></span>
    </div>
</div>
<!-- icon over -->
<!-- contactUs  -->
<div class="contactUs">
    <div class="container">
        <div class="left">
            <form action="{{route('index.addCustomerInfo')}}" method="post">
                <p class="titleCn">项目合作</p>
                <p class="titleEn">project cooperation</p>
                {!! csrf_field() !!}
                <p class="line"><input type="text" name="company" class="inputText" id="listCompany1" placeholder="企业名称"/></p>
                <p class="line"><input type="text" name="address_detail" class="inputText" id="listArea1" placeholder="行业地区"/></p>
                <p class="line"><input type="text" name="name" class="inputText" id="listName1" placeholder="联系人"/></p>
                <p class="line"><input type="text" name="phone" class="inputText" id="listPhone1" placeholder="联系电话"/></p>
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
<!-- footer -->
@endsection