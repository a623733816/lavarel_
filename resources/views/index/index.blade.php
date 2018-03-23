<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>赤风设计★广州专业品牌设计公司、品牌策划、VI设计、logo设计、包装设计！</title>
    <meta name="robots" content="all"/>
    <meta name="author" content="redwind design"/>
    <meta name="Copyright" content="Copyright 2001-2015 All Rights Reserved Redwind design co.,ltd."/>
    <meta name="description"
          content="赤风设计是专业的品牌设计公司、VI设计公司、包装设计公司、标志设计公司、logo设计公司和商标设计公司，致力于为企业提供专业品牌vi设计、产品包装设计、标志设计,商标设计、LOGO设计等服务，超过16年品牌设计经验，拥有众多成功案例!"/>
    <meta name="keywords"
          content="广州设计公司,设计公司,餐饮品牌策划公司,vi设计公司,标志设计公司,包装设计公司,商标设计公司,logo设计公司,品牌设计公司,广州标志设计公司,广州包装设计公司,广州VI设计公司,广州商标设计公司,广州logo设计公司"/>
    <meta name="searchtitle"
          content="广州设计公司,设计公司,vi设计公司,品牌设计公司,标志设计公司,包装设计公司,商标设计公司,logo设计公司,广州logo设计公司,广州标志设计公司,广州包装设计公司,广州VI设计公司,广州标志设计,广州包装设计,广州商标设计,广州VI设计"/>
    <link href="{{URL::asset('assets/images/images/favicon.ico')}}" rel="shortcut icon"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/newWeb/font.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/newWeb/base.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/newWeb/index.css')}}"/>
    <script src="{{URL::asset('assets/js/newWeb/jquery-1.11.0.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{URL::asset('assets/js/newWeb/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/newWeb/respond.min.js')}}"></script><![endif]-->
    <script charset="utf-8" src="{{URL::asset('assets/other/wpa.php')}}"></script>
</head>
<body>
<!-- header -->
<div class="header">
    <a href="/index.html"><img class="logo1" src="{{URL::asset('assets/images/images/logo.jpg')}}" title="赤风品牌策划与设计"/></a>
    <img class="navBtn" src="{{URL::asset('assets/images/images/navBtn.png')}}" title="点我!点我!"/>
    <div class="container">
        <ul class="nav">
            <a href="{{URL::asset('index')}}">
                <li  @if($active=='index')class="on" @endif>首页</li>
            </a>
            <a href="{{URL::asset('superiority')}}">
                <li>国家品牌智库</li>
            </a>
            <a href="{{URL::asset('project')}}">
                <li>评审标准</li>
            </a>
            <a href="{{URL::asset('project')}}">
                <li>申报流程</li>
            </a>
            <a href="{{URL::asset('redwind')}}">
                <li>申报表索取</li>
            </a>
            <a href="{{URL::asset('news')}}">
                <li>品牌明星</li>
            </a>
            <a href="{{URL::asset('partner')}}">
                <li>品牌总裁</li>
            </a>
            <a href="{{URL::asset('contact')}}">
                <li>联系我们</li>
            </a>
        </ul>
    </div>
</div>
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
    <p class="mainTitle">NEW PROJECTS</p>
    <div class="mainSub"></div>
    <span class="mainInfo">最新案例</span>
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
<!-- customer -->
<div class="customer">
    <div class="container">
        <p class="mainTitle">OUR CLIENTS</p>
        <div class="mainSub"></div>
        <span class="mainInfo">我们的客户</span>
        <div class="contents">
            <div class="contentss">
                <div class="content">
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/141.html"><img
                            src="{{URL::asset('assets/images/images/1461036511.jpg')}}" alt="湘剧场" title="湘剧场"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/144.html"><img
                            src="{{URL::asset('assets/images/images/1461036471.jpg')}}" alt="爱范儿" title="爱范儿"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/127.html"><img
                            src="{{URL::asset('assets/images/images/1460969116.jpg')}}" alt="NPC鲜柚智能科技" title="NPC鲜柚智能科技"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/142.html"><img
                            src="{{URL::asset('assets/images/images/1461036300.jpg')}}" alt="三潮煮艺" title="三潮煮艺"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/138.html"><img
                            src="{{URL::asset('assets/images/images/1461035258.jpg')}}" alt="普罗旺斯旅游投资集团" title="普罗旺斯旅游投资集团"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/135.html"><img
                            src="{{URL::asset('assets/images/images/1461035800.jpg')}}" alt="哈博电热水器" title="哈博电热水器"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/139.html"><img
                            src="{{URL::asset('assets/images/images/1461223128.jpg')}}" alt="言采其杞" title="言采其杞"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/140.html"><img
                            src="{{URL::asset('assets/images/images/1461225842.jpg')}}" alt="季然宁夏枸杞" title="季然宁夏枸杞"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1461918227.jpg')}}" alt="太禾米业" title="太禾米业"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1461916826.jpg')}}" alt="新粤交通" title="新粤交通"/></a>
                </div>
                <div class="content">
                    <a href="#"><img src="{{URL::asset('assets/images/images/1461918448.jpg')}}" alt="乐天实业" title="乐天实业"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/145.html"><img
                            src="{{URL::asset('assets/images/images/1461917219.jpg')}}" alt="拓普莱塑胶电子" title="拓普莱塑胶电子"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/124.html"><img
                            src="{{URL::asset('assets/images/images/1461036399.jpg')}}" alt="勇士安全套" title="勇士安全套"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/130.html"><img
                            src="{{URL::asset('assets/images/images/1461036140.jpg')}}" alt="BBU邦孚" title="BBU邦孚"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/133.html"><img
                            src="{{URL::asset('assets/images/images/1461036020.jpg')}}" alt="加能饮料包装设计" title="加能饮料包装设计"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/122.html"><img
                            src="{{URL::asset('assets/images/images/1461036046.jpg')}}" alt="一江化工" title="一江化工"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/118.html"><img
                            src="{{URL::asset('assets/images/images/1461223453.jpg')}}" alt="盛立皮具" title="盛立皮具"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433499509.jpg')}}" alt="DTS" title="DTS"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418038.jpg')}}" alt="飞利浦" title="飞利浦"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418044.jpg')}}" alt="富士通" title="富士通"/></a>
                </div>
                <div class="content">
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418051.jpg')}}" alt="中国平安" title="中国平安"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418060.jpg')}}" alt="华为" title="华为"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/125.html"><img
                            src="{{URL::asset('assets/images/images/1433418068.jpg')}}" alt="五羊母婴用品" title="五羊母婴用品"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418075.jpg')}}" alt="思朗" title="思朗"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/131.html"><img
                            src="{{URL::asset('assets/images/images/1433418084.jpg')}}" alt="GOFAIR 2012" title="GOFAIR 2012"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418093.jpg')}}" alt="耐克" title="耐克"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418101.jpg')}}" alt="珍珍薯片" title="珍珍薯片"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/113.html"><img
                            src="{{URL::asset('assets/images/images/1433418119.jpg')}}" alt="汉莎航空食品" title="汉莎航空食品"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418126.jpg')}}" alt="广东道" title="广东道"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/114.html"><img
                            src="{{URL::asset('assets/images/images/1433418131.jpg')}}" alt="广州妇女儿童医疗中心" title="广州妇女儿童医疗中心"/></a>
                </div>
                <div class="content">
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418137.jpg')}}" alt="鹰唛" title="鹰唛"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418142.jpg')}}" alt="致美斋" title="致美斋"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/143.html"><img
                            src="{{URL::asset('assets/images/images/1433418164.jpg')}}" alt="佳都科技" title="佳都科技"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418170.jpg')}}" alt="双飞人" title="双飞人"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/129.html"><img
                            src="{{URL::asset('assets/images/images/1433418176.jpg')}}" alt="UPTON上腾科技" title="UPTON上腾科技"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418182.jpg')}}" alt="广东交通集团" title="广东交通集团"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/134.html"><img
                            src="{{URL::asset('assets/images/images/1433418188.jpg')}}" alt="善元堂保建品" title="善元堂保建品"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418193.jpg')}}" alt="金健" title="金健"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418197.jpg')}}" alt="渝城味都" title="渝城味都"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418203.jpg')}}" alt="鹰金钱" title="鹰金钱"/></a>
                </div>
                <div class="content">
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418208.jpg')}}" alt="广东如春" title="广东如春"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/137.html"><img
                            src="{{URL::asset('assets/images/images/1433418213.jpg')}}" alt="LIVEON厨房用品" title="LIVEON厨房用品"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418218.jpg')}}" alt="宏新贷款" title="宏新贷款"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418223.jpg')}}" alt="彩田食品" title="彩田食品"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/136.html"><img
                            src="{{URL::asset('assets/images/images/1433418228.jpg')}}" alt="星星国际影城" title="星星国际影城"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418233.jpg')}}" alt="康贝喜" title="康贝喜"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418238.jpg')}}" alt="香满楼" title="香满楼"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418242.jpg')}}" alt="CKR" title="CKR"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/126.html"><img
                            src="{{URL::asset('assets/images/images/1433418248.jpg')}}" alt="迈普再生医学科技" title="迈普再生医学科技"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418255.jpg')}}" alt="慈丹" title="慈丹"/></a>
                </div>
                <div class="content">
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418260.jpg')}}" alt="嘉美博" title="嘉美博"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/128.html"><img
                            src="{{URL::asset('assets/images/images/1433418265.jpg')}}" alt="ENPOT雄冠条码" title="ENPOT雄冠条码"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418270.jpg')}}" alt="环亚大通" title="环亚大通"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418274.jpg')}}" alt="嘉可思" title="嘉可思"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/123.html"><img
                            src="{{URL::asset('assets/images/images/1433418279.jpg')}}" alt="壹号大药房" title="壹号大药房"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/110.html"><img
                            src="{{URL::asset('assets/images/images/1433418292.jpg')}}" alt="Filo斐诺数码电子" title="Filo斐诺数码电子"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418304.jpg')}}" alt="海尊" title="海尊"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418311.jpg')}}" alt="中盈国际商务港" title="中盈国际商务港"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418322.jpg')}}" alt="倍尔康" title="倍尔康"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418328.jpg')}}" alt="陈村" title="陈村"/></a>
                </div>
                <div class="content">
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/120.html"><img
                            src="{{URL::asset('assets/images/images/1433418334.jpg')}}" alt="史丹宝五金工具" title="史丹宝五金工具"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/115.html"><img
                            src="{{URL::asset('assets/images/images/1433418343.jpg')}}" alt="味道仔调味品" title="味道仔调味品"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418352.jpg')}}" alt="第二季" title="第二季"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418360.jpg')}}" alt="广东地质" title="广东地质"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/117.html"><img
                            src="{{URL::asset('assets/images/images/1433418366.jpg')}}" alt="蓝狮投资咨询" title="蓝狮投资咨询"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418371.jpg')}}" alt="三菱制药" title="三菱制药"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/132/serviceid/1.html"><img
                            src="{{URL::asset('assets/images/images/1433418377.jpg')}}" alt="OBest饼干包装设计" title="OBest饼干包装设计"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/111.html"><img
                            src="{{URL::asset('assets/images/images/1433418384.jpg')}}" alt="阿里棒时尚餐饮" title="阿里棒时尚餐饮"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418392.jpg')}}" alt="鑫峰" title="鑫峰"/></a>
                    <a href="http://www.redwind.cn/Home/Project/detail/project_id/121.html"><img
                            src="{{URL::asset('assets/images/images/1433418398.jpg')}}" alt="TMT计测检测" title="TMT计测检测"/></a>
                </div>
                <div class="content">
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418406.jpg')}}" alt="鲍鱼哥" title="鲍鱼哥"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418413.jpg')}}" alt="广益" title="广益"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1433418419.jpg')}}" alt="番禺电缆集团" title="番禺电缆集团"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1461225199.jpg')}}" alt="招财猫" title="招财猫"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1461225342.jpg')}}" alt="中科檀香" title="中科檀香"/></a>
                    <a href="#"><img src="{{URL::asset('assets/images/images/1461225758.jpg')}}" alt="新邦乐实业" title="新邦乐实业"/></a>
                    <a href="Url address"><img src="{{URL::asset('assets/images/images/1463815632.jpg')}}" alt="好逸客丰" title="好逸客丰"/></a>
                    <a href="Url address"><img src="{{URL::asset('assets/images/images/1463816915.jpg')}}" alt="馨捷" title="馨捷"/></a>
                    <a href="Url address"><img src="{{URL::asset('assets/images/images/1463815356.jpg')}}" alt="塑兴" title="塑兴"/></a>
                    <a href="Url address"><img src="{{URL::asset('assets/images/images/1463813776.jpg')}}" alt="云能科技" title="云能科技"/></a>
                </div>
            </div>
        </div>
        <img class="customerBtn leftBtn" onclick="customerBtnClick('-')" src="{{URL::asset('assets/images/images/customerLeft.png')}}"/>
        <img class="customerBtn rightBtn" onclick="customerBtnClick('+')" src="{{URL::asset('assets/images/images/customerRight.png')}}"/>
        <a href="/customer.html">
            <div class="linkBtn">
                <span>查看更多合作客户</span>
            </div>
        </a>
    </div>
</div>
<!-- customer over -->
<!-- say -->
<div class="say" style="background-color:#FF000B;">
    <div class="imgBg" style="background-image:url('Public/{{URL::asset('assets/images/images/index/say.jpg')}}')"></div>
    <div class="container">
        <div class="sub sub1"></div>
        <p class="title1">&nbsp;客户说</p>
        <p class="title">如果简单</p>
        <p class="title">我找赤风干嘛？</p>
        <div class="sub sub2"></div>
        <p class="title2">If it’s easy? </p>
        <p class="title2">Not need your help!</p>
    </div>
</div>
<!-- say over -->
<!-- advantage -->
<div class="advantage" style="background-color:#fff;">
    <div class="container">
        <p class="mainTitle">OUR ADVANTAGES</p>
        <div class="mainSub"></div>
        <span class="mainInfo">我们的优势</span>
        <div class="content">
            <p class="title">通过研究商业模式来定义品牌模式</p>
            <p class="info">提供优秀的品牌整合解决方案，令品牌长远发展，更具竞争力</p>
            <p><img src="{{URL::asset('assets/images/images/superiority.jpg')}}"/></p>
        </div>
        <a href="/model.html">
            <div class="linkBtn">
                <span>了解更多信息</span>
            </div>
        </a>
    </div>
</div>
<!-- advantage over -->
<!-- team -->
<div class="team">
    <div class="container">
        <p class="mainTitle">TEAM CORE</p>
        <div class="mainSub"></div>
        <span class="mainInfo">赤风核心</span>
        <div class="content">
            <a href="http://www.redwind.cn/team.html">
                <div class="child">
                    <div class="childImg">
                        <img src="{{URL::asset('assets/images/images/1434954106.jpg')}}"/>
                    </div>
                    <p class="titleEn">FANKY ZENG</p>
                    <p class="title">曾凡新</p>
                    <div class="sub"></div>
                    <p class="info">赤风品牌创始人/品牌顾问</p>
                </div>
            </a>
            <a href="http://www.redwind.cn/team.html">
                <div class="child">
                    <div class="childImg">
                        <img src="{{URL::asset('assets/images/images/1433416692.jpg')}}"/>
                    </div>
                    <p class="titleEn">ZHIQIANG WU</p>
                    <p class="title">吴志强</p>
                    <div class="sub"></div>
                    <p class="info">赤风品牌创始人/营运总监</p>
                </div>
            </a>
            <a href="http://www.redwind.cn/team.html">
                <div class="child">
                    <div class="childImg">
                        <img src="{{URL::asset('assets/images/images/1433417314.jpg')}}"/>
                    </div>
                    <p class="titleEn">YONGWU SU</p>
                    <p class="title">苏用武</p>
                    <div class="sub"></div>
                    <p class="info">品牌创作总监</p>
                </div>
            </a>
        </div>
    </div>
    <a href="/partner.html"><p class="foot">来吧! 与我们一起共事!</p></a>
</div>
<!-- team over-->
<!-- service -->
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
<!-- service over -->
<!-- news -->
<div class="news">
    <div class="container">
        <!-- left -->
        <div class="left">
            <p class="newsTitle">Viewpoint</p>
            <p class="newsInfo">品牌观点</p>
            <div class="content">
                <div class="quan" id="quan1">
                    <p class="titleEn">Ustability</p>
                    <p class="titleCh">实用</p>
                </div>
                <div class="quan" id="quan2">
                    <p class="titleEn">Creativity</p>
                    <p class="titleCh">创意设计</p>
                </div>
                <div class="quan" id="quan3">
                    <p class="titleEn">Marketing</p>
                    <p class="titleCh">营销</p>
                </div>
                <div class="quan" id="quan4">
                    <p class="titleEn">Balance</p>
                    <p class="titleCh">平衡</p>
                </div>
            </div>
        </div>
        <!-- left over -->
        <!-- right -->
        <div class="right">
            <p class="newsTitle">Redwind News</p>
            <p class="newsInfo">赤风动态</p>
            <div class="content">
                <a href="/Home/News/detail/news_id/567.html">
                    <div class="child">
                        <div class="childTime">
                            <p class="timeMonth">January</p>
                            <p class="timeDay">31</p>
                        </div>
                        <div class="childInfo">
                            <p class="title">2018年春节放假通知</p>
                            <p class="info">
                                您好！新春伊始，万象更新，值此新春来临之际，衷心感谢您在2017年对赤风设计的支持和关注，我司在此向您拜个早年，谨祝您和家人春节快乐，在新的一年里万事如意，财源广进！现我司综合实际情况定于2018年2月5日至2月22日为我司的春节假期，2月23日（年初八）正常上班，年前未提交设计稿或未结束的项目，将于2月23日继续正常运作，再次感谢您对赤风设计的支持与关注，若给您带来不便之处，敬请谅解！</p>
                        </div>
                    </div>
                </a>
                <a href="/Home/News/detail/news_id/566.html">
                    <div class="child">
                        <div class="childTime">
                            <p class="timeMonth">December</p>
                            <p class="timeDay">29</p>
                        </div>
                        <div class="childInfo">
                            <p class="title">赤风设计2018年元旦放假通知</p>
                            <p class="info">
                                岁末年初，辞旧迎新，满载记忆的2017即将远去，崭新的2018即将到来，在此恭祝公司全体员工、广大合作伙伴和新老客户节日快乐！我司2018年元旦放假时间安排如下：2017年12月30日-2018年1月1日为元旦假期，1月2日（周二）正常上班。感谢各位新老客户在2017年对赤风设计的支持和关注，若给广大新老客户带来不便之处，敬请谅解！放假期间如有其它联系事宜，请发送邮件到power@redwind.cn给我们留言。谢谢！</p>
                        </div>
                    </div>
                </a>
                <div class="child">
                    <div class="no"></div>
                    <div class="childInfo">
                        <a href="/news.html">
                            <div class="moreBtn">
                                <span>更多信息</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- right over -->
    </div>
</div>
<!-- news over -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <p class="mainTitle">Are you interested in ?</p>
        <p class="title">感兴趣吗？</p>
        <div class="mainSub"></div>
        <p class="info">有关我们服务的更多信息,请联系</p>
        <p class="info">138 2619 7540 吴先生 / 138 2629 9018 曾先生</p>
    </div>
</div>
<!-- contact over -->
<!-- footerNav -->
<div class="footerNav">
    <div class="container">
        <div class="right">
            <p class="title">与我们<span>合作</span></p>
            <p class="info">与赤风合作，您将会得到更成熟的品牌建设服务。我们以客户至上，同时也相互挑战，力求呈现最好的品牌建设成果。</p>
            <p class="callTitle">品牌顾问热线(曾生):</p>
            <p class="callMun">+138 2629 9018</p>
        </div>
        <div class="left">
            <ul>
                <li class="title">优 势</li>
                <a href="/superiority.html">
                    <li>赤风优势</li>
                </a>
                <a href="/model.html">
                    <li>品牌模式</li>
                </a>
                <a href="/superiority.html">
                    <li>服务项目</li>
                </a>
                <a href="/superiority.html">
                    <li>服务流程</li>
                </a>
                <a href="/customer.html">
                    <li>客户列表</li>
                </a>
            </ul>
            <ul>
                <li class="title">案 例</li>
                <a href="project.html">
                    <li>全部案例</li>
                </a>
                <a href="/Home/Project/index.html">
                    <li>服务分类</li>
                </a>
                <a href="/Home/Project/index.html">
                    <li>行业分类</li>
                </a>
            </ul>
            <ul>
                <li class="title">赤 风</li>
                <a href="/redwind.html">
                    <li>赤风介绍</li>
                </a>
                <a href="/history.html">
                    <li>发展历程</li>
                </a>
                <a href="/team.html">
                    <li>核心团队</li>
                </a>
                <a href="/redwind.html">
                    <li>办公环境</li>
                </a>
                <a href="/redwind.html">
                    <li>公司文化</li>
                </a>
                <a href="/redwind.html">
                    <li>品牌观点</li>
                </a>
            </ul>
            <ul>
                <li class="title">风 向</li>
                <a href="/news/1.html">
                    <li>赤风动态</li>
                </a>
                <a href="news/2.html">
                    <li>行业资讯</li>
                </a>
            </ul>
            <ul>
                <li class="title">伙 伴</li>
                <a href="/job.html">
                    <li>招聘信息</li>
                </a>
                <a href="/partner.html">
                    <li>合作伙伴</li>
                </a>
            </ul>
            <ul>
                <li class="title">联 系</li>
                <a href="/contact.html">
                    <li>联系方式</li>
                </a>
                <a href="/contact.html">
                    <li>位置地图</li>
                </a>
                <a href="/contact.html">
                    <li>留言板</li>
                </a>
            </ul>
        </div>
    </div>
</div>
<!-- footerNav over -->
<!-- footer -->
@extends('common.footer')
<script src="{{URL::asset('assets/js/newWeb/index.js')}}"></script>
</body>
</html>