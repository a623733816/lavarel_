@extends('index.lay')

@section('body')
<!-- header over-->
<div class="stance"></div>
<!-- list -->
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
    <img id="listCloseBtn" src="{{URL::asset('assets/images/images/closeIcon.png')}}"/>
</div>
<!-- list over -->
<link rel="stylesheet" type="text/css" href="css/indexAnimate.css"/>
<!-- banner -->
<div class="banner">
    <div class="contents">
        <a href="/redwind.html">
            <div class="content" style="background-image:url({{URL::asset('upload/banner/index/1483427615.jpg')}})">
                <div class="contentInfo">
                    <p class="title1">始于2001年</p>
                    <p class="title2">中国品牌设计公司50强</p>
                    <span class="title3">广州市赤风设计有限公司</span>
                </div>
            </div>
        </a>
        <a href="http://zc.suning.com/project/detail.htm?projectId=5598">
            <div class="content" style="background-image:url({{URL::asset('upload/banner/index/1461650738.jpg')}})">
                <div class="contentInfo">
                    <p class="title1">赤风品牌全案策划</p>
                    <p class="title2">净致消毒级卫生巾苏宁众筹上线</p>
                    <span class="title3">众筹资金超271%</span>
                </div>
            </div>
        </a>
        <a href="/project.html">
            <div class="content" style="background-image:url({{URL::asset('upload/banner/index/1432952879.jpg')}})">
                <div class="contentInfo">
                    <p class="title1">赤风餐饮品牌策划</p>
                    <p class="title2">全城人气爆棚的粤菜主题餐厅</p>
                    <span class="title3">广东道至正餐厅</span>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/143.html">
            <div class="content" style="background-image:url({{URL::asset('upload/banner/index/1435031633.jpg')}})">
                <div class="contentInfo">
                    <p class="title1">佳都科技</p>
                    <p class="title2">世界级智能科技倡行者</p>
                    <span class="title3">股票代码600728</span>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/127.html">
            <div class="content" style="background-image:url({{URL::asset('upload/banner/index/1433515769.jpg')}})">
                <div class="contentInfo">
                    <p class="title1">SMART ENJOY FUTURE</p>
                    <p class="title2">鲜柚智能科技全新形象</p>
                    <span class="title3">智享未来</span>
                </div>
            </div>
        </a>
    </div>
    <div class="bannerNav"></div>
    <img class="bannerBtn leftBtn" onclick="bannerBtnClick('-')" src="{{URL::asset('assets/images/images/bannerLeft.png')}}"/>
    <img class="bannerBtn rightBtn" onclick="bannerBtnClick('+')" src="{{URL::asset('assets/images/images/bannerRight.png')}}"/>
    <img class="bannerBg" src="{{URL::asset('assets/images/images/bannerBg.jpg')}}"/>
</div>
<!-- banner over -->
<!-- about -->
<div class="about">
    <div class="container">
        <p class="mainTitle">全面反映中国改革开放以来企业品牌建设的高质量成果</p>
        <div class="mainSub"></div>
        <span class="mainInfo">全国重点示范品牌</span>
        <div class="content">
            <!--<p class="title">十六年历程的品牌策划设计公司</p>-->
            <p class="info">2018 年是中国改革开放四十周年，也是中国特色社会主义进入新时代的关键节点。根据中央“要隆重纪念改革开放四十年”
                的重要指示和国务院印发《关于发挥品牌引领作用推动供需结构升级的意见》文件精神，以高质量品牌成果向改革开放四十周年献礼，由全国重点品牌示范工程办公室主办的“向改革开放四十周年献礼暨全国重点示范品牌评选”活动，自
                2018 年 3 月1 日起正式接受企事业单位和社会组织申报。</p>
            <!--<div class="contentMun">
             <div class="child">
              <p class="mun"><span>2000</span>+</p>
              <p>超过2000次服务经验</p>
             </div>
             <div class="child">
              <p class="mun"><span>16</span>+</p>
              <p>16年专业历程</p>
             </div>
             <div class="child">
              <p class="mun">TOP<span>50</span></p>
              <p>中国品牌设计50强</p>
             </div>
            </div>-->
            <a href="/redwind.html">
                <div class="linkBtn">
                    <span>了解更多信息</span>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- about over -->
<!-- work -->
<div class="work">
    <p class="mainTitle mainInfo">品牌展示</p>
    <div class="mainSub"></div>
    <!--<span class="mainInfo">最新案例</span>-->
    <div class="content">
        <a href="/Home/Project/detail/project_id/161.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1499499098.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>VI</p>
                        <p>DESIGN</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">老炮鸭</p>
                        <p class="info">重情！重义！重口味！</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/160.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1497520017.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>VI</p>
                        <p>DESIGN</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">摩登猩球</p>
                        <p class="info">活泼，可爱</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/144.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1454383338.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>LOGO</p>
                        <p>DESIGN</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">爱范儿</p>
                        <p class="info">连接热爱</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/143.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1454311379.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>VI</p>
                        <p>DESIGN</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">佳都科技</p>
                        <p class="info">城市，慧变得更好！</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/142.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1454311843.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>VI</p>
                        <p>DESIGN</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">三潮煮艺</p>
                        <p class="info">地道乡情，原生潮味</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/141.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1454381491.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>BRAND</p>
                        <p>DESIGN</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">湘剧场时尚餐饮</p>
                        <p class="info">湘菜有戏，生活有味</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/151.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1471259608.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>BRAND</p>
                        <p>DESIGN</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">广东道至正餐厅</p>
                        <p class="info">平实广东味道，地道广东文化</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/127.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1433514448.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>VI</p>
                        <p>DESIGN</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">NPC鲜柚智能科技</p>
                        <p class="info">智享未来</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/154.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1471576431.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>BRAND</p>
                        <p>DESIGN</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">老重庆饭店</p>
                        <p class="info">老子不上班也要吃酸菜鱼</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/137.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1438242091.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>BRAND</p>
                        <p>IDENTITY</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">LIVEON厨房用品</p>
                        <p class="info">时尚家用厨刀 美食规划专家</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/138.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1438266406.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>BRAND</p>
                        <p>IDENTITY</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">普罗旺斯旅游投资集团</p>
                        <p class="info">德国智慧 美丽中国</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/134.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1438093006.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>BRAND</p>
                        <p>IDENTITY</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">善元堂保建品</p>
                        <p class="info">中西结合更贴心</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/121.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1433309385.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>BRAND</p>
                        <p>IDENTITY</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">TMT计测检测</p>
                        <p class="info">厚重大气，沉稳性，严谨性</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/111.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1433310187.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>BRAND</p>
                        <p>IDENTITY</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">阿里棒时尚餐饮</p>
                        <p class="info">我的午餐握着吃</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
        <a href="/Home/Project/detail/project_id/140.html">
            <div class="child">
                <img class="childImg" src="{{URL::asset('assets/images/images/1438610389.jpg')}}"/>
                <div class="childHide">
                    <div class="childTag">
                        <p>BRAND</p>
                        <p>IDENTITY</p>
                        <div class="childSub"></div>
                    </div>
                    <div class="childContent">
                        <p class="title">季然宁夏枸杞</p>
                        <p class="info">生活，季然这样......</p>
                    </div>
                    <img class="childPointer" src="{{URL::asset('assets/images/images/hidePointer.png')}}"/>
                </div>
            </div>
        </a>
    </div>
    <a href="/project.html">
        <div class="linkBtn">
            <span>查看更多牛B案例</span>
        </div>
    </a>
</div>
<!-- work over -->
<!-- brand plan -->
<div class="service">
    <div class="container">
        <p class="mainTitle">OUR SERVICE</p>
        <div class="mainSub"></div>
        <span class="mainInfo">赤风服务</span>
        <div class="content">
            <div class="child">
                <div class="childTitle">
                    <p class="titleEn">Brand Model</p>
                    <p class="titleCh">品牌模式</p>
                </div>
                <div class="childContent">
                    <ul>
                        <li>使用规范</li>
                        <li>主题规划</li>
                        <li>命名系统</li>
                        <li>品牌语言</li>
                    </ul>
                    <ul>
                        <li>品牌表现</li>
                        <li>品牌企划</li>
                        <li>品牌核心</li>
                    </ul>
                </div>
            </div>
            <div class="child">
                <div class="childTitle">
                    <p class="titleEn">Brand Identity</p>
                    <p class="titleCh">品牌形象</p>
                </div>
                <div class="childContent">
                    <ul>
                        <li>品牌识别</li>
                        <li>产品设计</li>
                        <li>终端设计</li>
                        <li>包装设计</li>
                    </ul>
                    <ul>
                        <li>产品开发</li>
                        <li>采购点</li>
                        <li>标牌</li>
                    </ul>
                </div>
            </div>
            <div class="child">
                <div class="childTitle">
                    <p class="titleEn">Brand Experience</p>
                    <p class="titleCh">品牌体验</p>
                </div>
                <div class="childContent">
                    <ul>
                        <li>平面广告</li>
                        <li>市场行销</li>
                        <li>网站及互联网</li>
                        <li>艺术指导</li>
                    </ul>
                    <ul>
                        <li>短片及摄影</li>
                        <li>品牌经验</li>
                        <li>产品包装</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand plan over -->
<!-- footer -->
@endsection
