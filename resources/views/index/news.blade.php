@extends('index.lay')

@section('body')
    <?php $active = 'news' ?>
    <!-- header over-->
    <div class="stance"></div>
    <!-- list -->
    <div class="list" style="display:none;">
        <div class="container">
            <div class="left">
                <span class="redTitle">Hi,are you ready?</span>
                <p class="title">准备好开始了吗?<br/>你就是品牌明星</p>
                <p class="info">
                    有一个品牌项目想和我们谈谈吗?您可以填写右边的表格，让我们了解您的项目需求，这是一个良好的开始，我们将会尽快与你取得联系。当然也欢迎您给我们写信或是打电话，让我们听到你的声音!</p>
                <div class="footTitle">
                    <span class="titleB"></span>
                    <span>申报服务专员</span>
                </div>
                <p class="info">电 话：+021-63453030</p>
            </div>
            <div class="right">
                <p class="title">申报通道</p>
                <p class="line"><input type="text" class="inputText" id="listCompany" value="公司名称"/></p>
                <p class="line"><input type="text" class="inputText" id="listShop" value="品牌名称"/></p>
                <p class="line"><input type="text" class="inputText" id="listName" value="联系人"/></p>
                <p class="line"><input type="text" class="inputText" id="listPhone" value="联系电话"/></p>
                <p class="line"><input type="text" class="inputText" id="listEmail" value="联系邮箱"/></p>
                <p class="line"><input type="button"
                                       onclick="contactSubmit('/Home/Public/contact_submit.html',$('#listName').val(),$('#listCompany').val(),$('#listEmail').val(),$('#listTitle').val(),$('#listInfo').val())"
                                       class="inputBtn" value="立即提交"/></p>
            </div>
        </div>
        <img id="listCloseBtn" src="{{URL::asset('assets/images/images/closeIcon.png')}}"/>
    </div>
    <!-- list over -->
    <!-- banner -->
    <div class="banner" style="background-image:url({{URL::asset('upload/banner/other/newActiveBanner.jpg')}});">
        <img class="bannerBg" src="{{URL::asset('assets/images/images/otherBannerBg.jpg')}}"/>
    </div>
    <!-- banner over -->
    <!-- main -->
    <div class="newActive" id="main">
        <div class="container">
            <div class="content">
                <div class="left">
                    <img src="{{URL::asset('assets/images/images/indexNewest.jpg')}}" alt=""/>
                </div>
                <div class="right">
                    <div class="category">Newest</div>
                    <div class="title">叩开通往国家品牌的大门</div>
                    <div class="text">
                        全国重点品牌示范工程旨在通过《全国重点品牌发展规划(2018-2020年)》项目的实施，充分发挥政府政策的引导作用，为各级政府各行发展型企业提供全媒体多角度的品牌传播与品牌策划，贴心把脉，用三年时间培育一批高质量、高信誉、高市场占有率和高附加值的“全国重点品牌”。
                    </div>
                    <a href="detail.html">
                        <div class="linkBtn">
                            <span>全文&nbsp;&nbsp;→</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="content">
                <div class="left">
                    <img src="{{URL::asset('assets/images/images/indexFocus.jpg')}}" alt=""/>
                </div>
                <div class="right">
                    <div class="category">Focus</div>
                    <div class="title">重点品牌入选范围包含</div>
                    <div class="text">
                        企业品牌、产品品牌、成长性品牌、自主创新品牌、中华老字号品牌、旅游区域品牌。其中包括：食品、养生保健、餐饮、建材建筑装饰、农业、服装、轻工、电子商务、医药、汽车及配件制造、印刷、包装、礼品、金融业、信息技术、商业零售等行业。
                    </div>
                    <a href="detail.html">
                        <div class="linkBtn">
                            <span>全文&nbsp;&nbsp;→</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="content">
                <div class="left">
                    <img src="{{URL::asset('assets/images/images/indexInterview.jpg')}}" alt=""/>
                </div>
                <div class="right">
                    <div class="category">Interview</div>
                    <div class="title">培育方向与入选品牌权益</div>
                    <div class="text">
                        入选品牌代表了改革开放40年来企业品牌建设的高质量品牌成果，荣誉证书和证牌统一制作、编号和颁发。企业可使用统一的荣誉标识刊登广告和宣传。同时将在品牌价值提升，品牌商业化和品牌产权资本化等方面获得精准服务对接，由国家品牌战略研究智库提供一对一帮扶，助力成就国家品牌。
                    </div>
                    <a href="detail.html">
                        <div class="linkBtn">
                            <span>全文&nbsp;&nbsp;→</span>
                        </div>
                    </a>
                </div>
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

