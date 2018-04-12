@extends('index.lay')

@section('body')
    <?php $active = 'news' ?>
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

