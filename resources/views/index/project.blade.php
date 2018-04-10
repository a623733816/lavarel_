@extends('index.lay')

@section('body')
  <!-- header over-->
  <div class="stance"></div>
  <!-- list -->
  <div class="list" style="display:none;">
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
  <div class="banner" style="background-image:url({{URL::asset('upload/banner/other/brandBanner.jpg')}});">
   <img class="bannerBg" src="{{URL::asset('assets/images/images/otherBannerBg.jpg')}}" />
  </div>
  <!-- banner over -->
  <!-- main -->
  <div class="main">
        <div class="content">
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1499499098.jpg')}}"/>
                    <div class="childHide">
                        <div class="childTag">
                            <p>BRAND</p>
                            <p>DISPLAY</p>
                            <div class="childSub"></div>
                        </div>
                        <div class="childContent">
                            <p class="title"><img src="{{URL::asset('assets/images/images/brandIcon1.png')}}" alt=""/></p>
                            <p class="title">成就与责任</p>
                            <p class="info">国家级非物质文化遗产</p>
                        </div>
                        <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1497520017.jpg')}}"/>
                    <div class="childHide">
                        <div class="childTag">
                            <p>BRAND</p>
                            <p>DISPLAY</p>
                            <div class="childSub"></div>
                        </div>
                        <div class="childContent">
                            <p class="title"><img src="{{URL::asset('assets/images/images/brandIcon2.png')}}" alt=""/></p>
                            <p class="info">泛亚医药，一切为了健康</p>
                        </div>
                        <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1454383338.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1454311379.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1454311843.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1454381491.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1471259608.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1433514448.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1471576431.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1438242091.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1438266406.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1438093006.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1433309385.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1433310187.jpg')}}"/>
                </div>
            </a>
            <a href="">
                <div class="child">
                    <img class="childImg" src="{{URL::asset('assets/images/images/1438610389.jpg')}}"/>
                </div>
            </a>
        </div>
        <a href="">
            <div class="linkBtn">
                <span>了解更多&nbsp;&nbsp;&nbsp;&nbsp;→</span>
            </div>
        </a>
  </div>
  <!-- main over -->
  <!-- footer -->
  @endsection
  <!--<script src="{{ URL::asset('assets/js/newWeb/projectAjax.js')}}"></script>
  <script>    setUrl('/Home/Project/indexAjax.html','/Home/Project/detail','','');

</script>-->