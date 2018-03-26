@extends('index.lay')

@section('body')
  <!-- header over-->
  <div class="stance"></div>
  <!-- list -->
  <div class="list">
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
   <img id="listCloseBtn" src="images/closeIcon.png" />
  </div>
  <!-- list over -->
  <!-- banner -->
  <div class="banner" style="background-image:url(Public/upload/banner/other/1433261141.jpg);">
   <div class="bannerInfo">
    <p class="title">PROJECT</p>
    <p class="title">ACHIEVE BEYOND YOUR EXPECTATIONS</p>
    <span class="titleCh">超越预期 做到你想不到</span>
   </div>
   <img class="bannerBg" src="images/bannerBg.jpg" />
  </div>
  <!-- banner over -->
  <!-- main -->
  <div class="main">
   <div class="mainNav">
    <a href="/allproject.html">
     <div class="child on">
      全部案例
     </div></a>
    <!-- <a href="/newproject.html"><div class="child ">最新案例</div></a> -->
    <div class="child childList ">
     <span>服务分类</span>
     <ul>
      <!-- <a href="/Home/Project/index.html"><li>全部</li></a> -->
      <a href="/Home/Project/index/serviceid/1.html"><li>企业品牌形象策划</li></a>
      <a href="/Home/Project/index/serviceid/4.html"><li>餐饮品牌全案策划</li></a>
      <a href="/Home/Project/index/serviceid/10.html"><li>产品包装形象策划</li></a>
     </ul>
    </div>
    <div class="child childList ">
     <span>行业分类</span>
     <ul>
      <!-- <a href="/Home/Project/index.html"><li>全部</li></a> -->
      <a href="/Home/Project/index/industryid/1.html"><li>食品饮料快消品</li></a>
      <a href="/Home/Project/index/industryid/3.html"><li>餐饮娱乐休闲</li></a>
      <a href="/Home/Project/index/industryid/5.html"><li>科技数码行业</li></a>
      <a href="/Home/Project/index/industryid/6.html"><li>医疗健康产业</li></a>
      <a href="/Home/Project/index/industryid/7.html"><li>时尚服饰美妆</li></a>
      <a href="/Home/Project/index/industryid/9.html"><li>生活家居服务</li></a>
     </ul>
    </div>
   </div>
   <div class="content">
    <a href="/Home/Project/detail/project_id/161.html">
     <div class="child">
      <img class="childImg" src="images/1499499098.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/160.html">
     <div class="child">
      <img class="childImg" src="images/1497520017.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/144.html">
     <div class="child">
      <img class="childImg" src="images/1454383338.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/143.html">
     <div class="child">
      <img class="childImg" src="images/1454311379.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/142.html">
     <div class="child">
      <img class="childImg" src="images/1454311843.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/141.html">
     <div class="child">
      <img class="childImg" src="images/1454381491.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/151.html">
     <div class="child">
      <img class="childImg" src="images/1471259608.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/127.html">
     <div class="child">
      <img class="childImg" src="images/1433514448.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/154.html">
     <div class="child">
      <img class="childImg" src="images/1471576431.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/137.html">
     <div class="child">
      <img class="childImg" src="images/1438242091.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/138.html">
     <div class="child">
      <img class="childImg" src="images/1438266406.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/134.html">
     <div class="child">
      <img class="childImg" src="images/1438093006.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/121.html">
     <div class="child">
      <img class="childImg" src="images/1433309385.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/111.html">
     <div class="child">
      <img class="childImg" src="images/1433310187.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/140.html">
     <div class="child">
      <img class="childImg" src="images/1438610389.jpg" />
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
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/148.html">
     <div class="child">
      <img class="childImg" src="images/1471085424.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>BRAND</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">比比味鸡排</p>
        <p class="info">比好吃，更有味</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/125.html">
     <div class="child">
      <img class="childImg" src="images/1433514297.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>BRAND</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">五羊母婴用品</p>
        <p class="info">五羊，更懂妈妈</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/130.html">
     <div class="child">
      <img class="childImg" src="images/1438090776.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>PACK</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">BBU邦孚</p>
        <p class="info">呵护宝宝健康</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/139.html">
     <div class="child">
      <img class="childImg" src="images/1438430261.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>LOGO</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">言采其杞</p>
        <p class="info">愈东方 愈国际</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/153.html">
     <div class="child">
      <img class="childImg" src="images/1471508087.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>BRAND</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">泰宝医疗</p>
        <p class="info">健康热情，活力奔放</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/117.html">
     <div class="child">
      <img class="childImg" src="images/1433310439.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>BRAND</p>
        <p>IDENTITY</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">蓝狮投资咨询</p>
        <p class="info">专业视角、专业知识、专业操作</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/120.html">
     <div class="child">
      <img class="childImg" src="images/1433309895.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>BRAND</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">史丹宝五金工具</p>
        <p class="info">专业性、视觉冲击力</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/132.html">
     <div class="child">
      <img class="childImg" src="images/1438266936.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>PACK</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">OBest饼干包装设计</p>
        <p class="info">健康家庭的选择！</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/135.html">
     <div class="child">
      <img class="childImg" src="images/1438170554.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>BRAND</p>
        <p>IDENTITY</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">哈博电热水器</p>
        <p class="info">中国高端快热专家</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/158.html">
     <div class="child">
      <img class="childImg" src="images/1472181743.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>BRAND</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">克尔卫汽车用品</p>
        <p class="info">专业净化、健康卫士</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/118.html">
     <div class="child">
      <img class="childImg" src="images/1433309324.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>LOGO</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">盛立皮具</p>
        <p class="info">简约、大气、高贵、时尚</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/122.html">
     <div class="child">
      <img class="childImg" src="images/1433517378.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>PACK</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">一江化工</p>
        <p class="info">时尚、大气、国际化</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/126.html">
     <div class="child">
      <img class="childImg" src="images/1433427796.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>VI</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">迈普再生医学科技</p>
        <p class="info">简洁、大方、创新性</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/133.html">
     <div class="child">
      <img class="childImg" src="images/1438090049.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>PACK</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">加能饮料包装设计</p>
        <p class="info">为生活增加能量！</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
    <a href="/Home/Project/detail/project_id/136.html">
     <div class="child">
      <img class="childImg" src="images/1438178076.jpg" />
      <div class="childHide">
       <div class="childTag">
        <p>VI</p>
        <p>DESIGN</p>
        <div class="childSub"></div>
       </div>
       <div class="childContent">
        <p class="title">星星国际影城</p>
        <p class="info">时尚，简洁，国际范</p>
       </div>
       <img class="childPointer" src="images/hidePointer.png" />
      </div>
     </div></a>
   </div>
   <a href="#">
    <div class="linkBtn">
     <span>查看更多案例</span>
    </div></a>
  </div>
  <!-- main over -->
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
      <a href="/superiority.html"><li>赤风优势</li></a>
      <a href="/model.html"><li>品牌模式</li></a>
      <a href="/superiority.html"><li>服务项目</li></a>
      <a href="/superiority.html"><li>服务流程</li></a>
      <a href="/customer.html"><li>客户列表</li></a>
     </ul>
     <ul>
      <li class="title">案 例</li>
      <a href="project.html"><li>全部案例</li></a>
      <a href="/Home/Project/index.html"><li>服务分类</li></a>
      <a href="/Home/Project/index.html"><li>行业分类</li></a>
     </ul>
     <ul>
      <li class="title">赤 风</li>
      <a href="/redwind.html"><li>赤风介绍</li></a>
      <a href="/history.html"><li>发展历程</li></a>
      <a href="/team.html"><li>核心团队</li></a>
      <a href="/redwind.html"><li>办公环境</li></a>
      <a href="/redwind.html"><li>公司文化</li></a>
      <a href="/redwind.html"><li>品牌观点</li></a>
     </ul>
     <ul>
      <li class="title">风 向</li>
      <a href="/news/1.html"><li>赤风动态</li></a>
      <a href="news/2.html"><li>行业资讯</li></a>
     </ul>
     <ul>
      <li class="title">伙 伴</li>
      <a href="/job.html"><li>招聘信息</li></a>
      <a href="/partner.html"><li>合作伙伴</li></a>
     </ul>
     <ul>
      <li class="title">联 系</li>
      <a href="/contact.html"><li>联系方式</li></a>
      <a href="/contact.html"><li>位置地图</li></a>
      <a href="/contact.html"><li>留言板</li></a>
     </ul>
    </div>
   </div>
  </div>
  <!-- footerNav over -->
  <!-- footer -->
  @endsection
  <script src="{{ URL::asset('assets/js/newWeb/projectAjax.js')}}"></script>
  <script>    setUrl('/Home/Project/indexAjax.html','/Home/Project/detail','','');

</script>