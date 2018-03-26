@extends('index.lay')

@section('body')
<!-- header over-->
<div class="stance"></div><!-- list -->
<div class="list">
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
    <img id="listCloseBtn" src="images/closeIcon.png"/></div><!-- list over --><!-- banner -->
<div class="banner" style="background-image:url(Public/upload/banner/other/1432959134.jpg);">
    <div class="bannerInfo"><p class="title">COMMUNICATION</p>
        <p class="title">THE BEGINNING OF PROBLEM SOLVING</p><span class="titleCh">万事俱备 只欠赤风</span></div>
    <img class="bannerBg" src="images/bannerBg.jpg"/></div><!-- banner over --><!-- contactTable -->
<div class="contactTable">
    <div class="container">
        <div class="left"><span class="redTitle">Hi,are you ready?</span>
            <p class="title">申报期限将近<br />请抓紧登录“申报通道”</p>
            <p class="info">有一个品牌项目想和我们谈谈吗?您可以填写右边的表格，让我们了解您的项目需求，这是一个良好的开始，我们将会尽快与你取得联系。当然也欢迎您给我们写信或是打电话，让我们听到你的声音!</p>
            <!--<div class="footTitle"><span class="titleB">Redwind</span><span>赤风品牌策划与设计</span></div>-->
            <p class="info"></p>
            <p class="info">地 址：上海市黄浦区打浦路15 号长城金融大厦3803 室</p>
            <p class="info">电 话：021-63453030</p>
            <p class="info">E-mail：ssd@vip.163.com</p>
            <p class="contactTableTitle">申报服务专员</p>
            <p class="contactTableInfo">021-63453030</p>
        </div>
        <div class="right"><p class="title">申报通道</p>
            <p class="line"><input type="text" class="inputText" id="listCompany1" value="公司名称"/></p>
            <p class="line"><input type="text" class="inputText" id="listBrand1" value="品牌名称"/></p>
            <p class="line"><input type="text" class="inputText" id="listName1" value="联系人"/></p>
            <p class="line"><input type="text" class="inputText" id="listPhone1" value="联系电话"/></p>
            <p class="line"><input type="text" class="inputText" id="listEmail1" value="联系邮箱"/></p>
            <!--<p class="line"><textarea class="textArea" id="listInfo1">告诉我们您的项目基本信息</textarea></p>-->
            <p class="line"><input type="button" class="inputBtn"
                                   onclick="contactSubmit('/Home/Public/contact_submit.html',$('#listName1').val(),$('#listCompany1').val(),$('#listEmail1').val(),$('#listTitle1').val(),$('#listInfo1').val())"
                                   value="立即提交"/></p></div>
    </div>
</div><!-- contactTable over --><!-- contactIcon -->
<div class="contactIcon">
    <div class="container"><a href="#">
        <div class="child codeChild">
            <div class="childImg"><img src="Public/images/contact/2dCode.jpg" title="赤风品牌官方微信"/></div>
            <p class="title">关注微信一举一动尽在掌握</p></div>
    </a>
        <div id="mapIcon" class="child secondChild">
            <div class="childImg"><img src="Public/images/contact/addressIcon.png" title="百度地图位置"/></div>
            <p class="title">查看地图，了解赤风位置</p></div>
        <a href="tencent://message/?uin=454258656&Site=www.redwind.cn&Menu=yes" target=_blank>
            <div class="child threeChild" id="BizQQWPA1">
                <div class="childImg"><img src="Public/images/contact/qqIcon.png" title="企业QQ在线咨询"/></div>
                <p class="title">QQ在线454258656</p></div>
        </a>
        <script>/*BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 454258656, selector: 'BizQQWPA1'});*/</script>
        <a href="/Redwind.pps">
            <div class="child secondChild">
                <div class="childImg"><img src="Public/images/contact/fileIcon.png" title="公司简介PPT下载"/></div>
                <p class="title">2015公司简介PPT下载</p></div>
        </a><a href="#"
               onclick="javascript:window.open('http://dwz.cn/NfCtQ','','height=608,width=838,top=0,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no,screenX=300px,screenY=300px, status=no')">
            <div class="child">
                <div class="childImg"><img src="Public/images/contact/phoneIcon.png" title="免费电话咨询"/></div>
                <p class="title">品牌设计咨询，免费电话回呼</p></div>
        </a><a href="http://www.baidu.com/s?wd=%E5%B9%BF%E5%B7%9E%E5%B8%82%E8%B5%A4%E9%A3%8E%E8%AE%BE%E8%AE%A1%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8%E7%99%BE%E5%BA%A6%E4%BF%A1%E8%AA%89%E6%A1%A3%E6%A1%88"
               target="_blank">
            <div class="child threeChild secondChild">
                <div class="childImg"><img src="Public/images/contact/emailIcon.png" title="赤风信誉档案"/></div>
                <p class="title">查看赤风信誉档案</p></div>
        </a></div>
</div><!-- contactIcon over --><!-- map -->
<div class="map"><p class="mapTitle">智汇Park创意产业园B座5A05</p>
    <div class="mapSub"></div>
    <p class="mapInfo">如果您是亲临赤风，有以下交通方式可供选择：</p>
    <p class="mapInfo">乘坐地铁：地铁三号线、六号线，在天河客动站下车D出口右转直行100米见肯德基即到,自驾车：参考地图标示行驶广州大道,广汕路,广园快速路,华南快速干线前往天河客运站均可到达</p>
    <div class="mapContent" id="mapContent"></div>
</div><!-- map over --><!-- contact -->
<div class="contact">
    <div class="container"><p class="mainTitle">Are you interested in ?</p>
        <p class="title">感兴趣吗？</p>
        <div class="mainSub"></div>
        <p class="info">有关我们服务的更多信息,请联系</p>
        <p class="info">138 2619 7540 吴先生 / 138 2629 9018 曾先生</p></div>
</div><!-- contact over --><!-- footerNav -->
<div class="footerNav">
    <div class="container">
        <div class="right"><p class="title">与我们<span>合作</span></p>
            <p class="info">与赤风合作，您将会得到更成熟的品牌建设服务。我们以客户至上，同时也相互挑战，力求呈现最好的品牌建设成果。</p>
            <p class="callTitle">品牌顾问热线(曾生):</p>
            <p class="callMun">+138 2629 9018</p></div>
        <div class="left">
            <ul>
                <li class="title">优 势</li>
                <a href="/superiority.html">
                    <li>赤风优势</li>
                </a><a href="/model.html">
                <li>品牌模式</li>
            </a><a href="/superiority.html">
                <li>服务项目</li>
            </a><a href="/superiority.html">
                <li>服务流程</li>
            </a><a href="/customer.html">
                <li>客户列表</li>
            </a></ul>
            <ul>
                <li class="title">案 例</li>
                <a href="project.html">
                    <li>全部案例</li>
                </a><a href="/Home/Project/index.html">
                <li>服务分类</li>
            </a><a href="/Home/Project/index.html">
                <li>行业分类</li>
            </a></ul>
            <ul>
                <li class="title">赤 风</li>
                <a href="/redwind.html">
                    <li>赤风介绍</li>
                </a><a href="/history.html">
                <li>发展历程</li>
            </a><a href="/team.html">
                <li>核心团队</li>
            </a><a href="/redwind.html">
                <li>办公环境</li>
            </a><a href="/redwind.html">
                <li>公司文化</li>
            </a><a href="/redwind.html">
                <li>品牌观点</li>
            </a></ul>
            <ul>
                <li class="title">风 向</li>
                <a href="/news/1.html">
                    <li>赤风动态</li>
                </a><a href="news/2.html">
                <li>行业资讯</li>
            </a></ul>
            <ul>
                <li class="title">伙 伴</li>
                <a href="/job.html">
                    <li>招聘信息</li>
                </a><a href="/partner.html">
                <li>合作伙伴</li>
            </a></ul>
            <ul>
                <li class="title">联 系</li>
                <a href="/contact.html">
                    <li>联系方式</li>
                </a><a href="/contact.html">
                <li>位置地图</li>
            </a><a href="/contact.html">
                <li>留言板</li>
            </a></ul>
        </div>
    </div>
</div><!-- footerNav over --><!-- footer -->
@endsection