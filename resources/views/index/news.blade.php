@extends('index.lay')

@section('body')
  <!-- header over-->
  <div class="stance"></div>
  <!-- list -->
  <div class="list">
   <div class="container">
    <div class="left">
     <span class="redTitle">Hi,are you ready?</span>
     <p class="title">准备好开始了吗?<br />你就是品牌明星</p>
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
  <div class="banner" style="background-image:url(Public/upload/banner/other/1433261103.jpg);">
   <div class="bannerInfo">
    <p class="title">INFOMATION</p>
    <p class="title">EVERYTHING IS FOR THE BUSINESS</p>
    <span class="titleCh">了解赤风 更超越赤风</span>
   </div>
   <img class="bannerBg" src="images/bannerBg.jpg" />
  </div>
  <!-- banner over -->
  <!-- main -->
  <div class="main">
   <div class="mainNav">
    <a href="/allnews.html">
     <div class="child on">
      全部
     </div></a>
    <a href="/news/1.html">
     <div class="child ">
      赤风动态
     </div></a>
    <a href="/news/2.html">
     <div class="child ">
      行业资讯
     </div></a>
   </div>
   <div class="container">
    <div class="content">
     <div class="child">
      <div class="childImg">
       <img src="images/1516587412.jpg" />
      </div>
      <div class="childInfo">
       <p class="datetime">2018.1.31</p>
       <p class="title">2018年春节放假通知</p>
       <p class="info">您好！新春伊始，万象更新，值此新春来临之际，衷心感谢您在2017年对赤风设计的支持和关注，我司在此向您拜个早年，谨祝您和家人春节快乐，在新的一年里万事如意，财源广进！现我司综合实际情况定于2018年2月5日至2月22日为我司的春节假期，2月23日（年初八）正常上班，年前未提交设计稿或未结束的项目，将于2月23日继续正常运作，再次感谢您对赤风设计的支持与关注，若给您带来不便之处，敬请谅解！</p>
       <a href="/Home/News/detail/news_id/567.html">
        <div class="childBtn">
         <span>详细信息</span>
        </div></a>
      </div>
     </div>
     <div class="child">
      <div class="childImg">
       <img src="images/1514516406.jpg" />
      </div>
      <div class="childInfo">
       <p class="datetime">2017.12.29</p>
       <p class="title">赤风设计2018年元旦放假通知</p>
       <p class="info">岁末年初，辞旧迎新，满载记忆的2017即将远去，崭新的2018即将到来，在此恭祝公司全体员工、广大合作伙伴和新老客户节日快乐！我司2018年元旦放假时间安排如下：2017年12月30日-2018年1月1日为元旦假期，1月2日（周二）正常上班。感谢各位新老客户在2017年对赤风设计的支持和关注，若给广大新老客户带来不便之处，敬请谅解！放假期间如有其它联系事宜，请发送邮件到power@redwind.cn给我们留言。谢谢！</p>
       <a href="/Home/News/detail/news_id/566.html">
        <div class="childBtn">
         <span>详细信息</span>
        </div></a>
      </div>
     </div>
     <div class="child">
      <div class="childImg">
       <img src="images/1510366614.jpg" />
      </div>
      <div class="childInfo">
       <p class="datetime">2017.11.11</p>
       <p class="title">BAC Credomatic集团的新商标设计</p>
       <p class="info">BAC Credomatic是于1952年在尼加拉瓜首都马那瓜成立的金融集团，其业务服务范围覆盖整个中美洲地区，是中美洲地区领先的金融机构，根据赤风设计从国外相关设计资讯中了解得知，BAC Credomatic于最近对外推出其新视觉形象VI设计系统，而这项品牌更新设计任务是交由知名的品牌设计公司负责构思改造。</p>
       <a href="/Home/News/detail/news_id/565.html">
        <div class="childBtn">
         <span>详细信息</span>
        </div></a>
      </div>
     </div>
     <div class="child">
      <div class="childImg">
       <img src="images/1509081503.jpg" />
      </div>
      <div class="childInfo">
       <p class="datetime">2017.10.27</p>
       <p class="title">Azimo的新品牌策划设计</p>
       <p class="info">Azimo是于一款于2012年在英国成立的线上国际汇款服务平台，该服务平台致力于提供方便、快捷、安全且手续费低廉的国际汇款业务,目前该平台可以帮助客户从英国、德国、奥地利、爱尔兰四国将资金汇至其他192个国家和地区，涉及货币品种多大80多种，根据赤风设计从相关品牌设计资讯中了解得知，Azimo于近期启用新品牌形象VI设计，而这项设计任务是交由位于英国伦敦的品牌策划设计公司负责创建。</p>
       <a href="/Home/News/detail/news_id/564.html">
        <div class="childBtn">
         <span>详细信息</span>
        </div></a>
      </div>
     </div>
     <div class="child">
      <div class="childImg">
       <img src="images/1508312387.jpg" />
      </div>
      <div class="childInfo">
       <p class="datetime">2017.10.18</p>
       <p class="title">COVERGIRL的新品牌形象VI设计系统</p>
       <p class="info">COVERGIRL（封面女孩）是美国著名彩妆品牌，也是宝洁公司旗下主要产品之一，其自1961年推出以来，就一直致力于彩妆产品的研究，以满足广大消费者的需求，从而使COVERGIRL不仅是在美国占据领导地位的化妆品品牌，同时也是占据加拿大市场很高市场份额的化妆品品牌，根据赤风设计从国外相关设计资讯中获悉，COVERGIRL于近期正式启用新形象LOGO设计，而这项品牌更新设计任务是交由国外知名品牌策划设计公司负责构思改造。</p>
       <a href="/Home/News/detail/news_id/563.html">
        <div class="childBtn">
         <span>详细信息</span>
        </div></a>
      </div>
     </div>
     <div class="child">
      <div class="childImg">
       <img src="images/1507882714.jpg" />
      </div>
      <div class="childInfo">
       <p class="datetime">2017.10.13</p>
       <p class="title">DENERG启用新形象LOGO设计</p>
       <p class="info">DENERG（丹能集团）是一家位于丹麦的能源公司，其致力于离岸风场的发展、建造、营运，透过电厂生产电力及热能，也向能源批发商、企业、家庭用户提供和交易能源，也是北欧能源集团巨擘之一，根据赤风设计从国外相关设计资讯中了解得知，DENERG于近期对外推出其更名后的新视觉形象LOGO设计，而这项品牌更新设计任务是交由相关设计公司负责构思改造。</p>
       <a href="/Home/News/detail/news_id/562.html">
        <div class="childBtn">
         <span>详细信息</span>
        </div></a>
      </div>
     </div>
    </div>
   </div>
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
  <script src="{{ URL::asset('assets/js/newWeb/newsAjax.js')}}"></script>
  <!-- js over -->
  <script>    setUrl('/Home/News/indexAjax.html','/Home/News/detail','');

</script>
