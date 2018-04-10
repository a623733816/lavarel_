@extends('index.lay')

@section('body')
  <!-- header over-->
  <div class="stance"></div>
  <!-- list -->
  <div class="list" style="display:none;>
   <div class="container">
    <div class="left">
     <span class="redTitle">Hi,are you ready?</span>
     <p class="title">准备好开始了吗?<br />你就是品牌总裁</p>
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
   <img id="listCloseBtn" src="{{URL::asset('assets/images/images/closeIcon.png')}}" />
  </div>
  <!-- list over -->
  <!-- banner -->
  <div class="banner" style="background-image:url({{URL::asset('upload/banner/other/conditionBanner.jpg')}});">
   <img class="bannerBg" src="{{URL::asset('assets/images/images/otherBannerBg.jpg')}}" />
  </div>
  <!-- banner over -->
  <!-- main -->
  <div class="main">
    <div class="container">
        <div class="title">
            <p>叩开通往国家品牌的大门</p>
            <p>《全国重点品牌发展规划（2018年-2020年）》</p>
            <span>申报须知</span>
            <span class="line"></span>
        </div>
        <div class="content">
            <span>全国重点品牌示范工旨在通过《全国重点品牌发展规划（2018年-2020年）》项目的实施，充分发挥政府政策的引导作用，为各级政府各行发展型企业提供全媒体多角度的品牌传播与品牌策划，贴心把脉，用三年时间培育一批高质量、高信誉、高市场占有率和高附加值的“全国重点品牌”。</span>
            <img src="{{URL::asset('assets/images/images/conditionImg.jpg')}}" alt=""/>
            <p>一、入选范围</p>
            <span>全国重点品牌示范工旨在通过《全国重点品牌发展规划（2018年-2020年）》项目的实施，充分发挥政府政策的引导作用，为各级政府各行发展型企业提供全媒体多角度的品牌传播与品牌策划，贴心把脉，用三年时间培育一批高质量、高信誉、高市场占有率和高附加值的“全国重点品牌”。</span>
            <p>二、入选范围</p>
            <span>全国重点品牌示范工旨在通过《全国重点品牌发展规划（2018年-2020年）》项目的实施，充分发挥政府政策的引导作用，为各级政府各行发展型企业提供全媒体多角度的品牌传播与品牌策划，贴心把脉，用三年时间培育一批高质量、高信誉、高市场占有率和高附加值的“全国重点品牌”。</span>
        </div>
    </div>
  </div>
  <!-- main over -->
  <!-- footer -->
@endsection