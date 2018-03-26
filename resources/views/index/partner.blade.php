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
  <div class="banner" style="background-image:url(Public/upload/banner/other/1432914029.jpg);">
   <div class="bannerInfo">
    <p class="title">PARTNER</p>
    <p class="title">WORK MORE THAN WORK</p>
    <span class="titleCh">不只是工作 也可以是合作</span>
   </div>
   <img class="bannerBg" src="images/bannerBg.jpg" />
  </div>
  <!-- banner over -->
  <!-- main -->
  <div class="main">
   <div class="mainChild" id="mainChild1">
    <div class="container">
     <p class="mainsTitle">改革开放以来品牌建设的高质量成果</p>
     <div class="mainSub"></div>
     <p class="mainsTitleRed">品牌实力具有代表性、权威性、标志性</p>
     <p class="mainsInfo">根据《全国重点示范品牌评定标准和实施细则》规定，入选品牌是指能够代表中国改革开放四十周年品牌成果，在行业内具有领军示范作用的高质量品牌。
评选工作将严格参照国家认监委颁布的我国首部品牌评价国家标准评审，所有申报单位的参选品牌都必须经过第三方权威机构发布公示。</p>
     <div class="content">
      <a href="./detail.html">
       <div class="child">
        <p class="childTitle">评定标准和实施细则</p>
        <p class="childTitleEn">Standard&Rule</p>
        <div class="childSub" style="margin-top: 40px;"></div>
        <p class="childMun">申报必读</p>
       </div></a>
      <a href="./detail.html">
       <div class="child">
        <p class="childTitle">评价申报流程</p>
        <p class="childTitleEn">Declaration process</p>
        <div class="childSub"></div>
        <p class="childMun">申报必读</p>
       </div></a>
      <a href="./detail.html">
       <div class="child">
        <p class="childTitle" >入选品牌<br>六大权限</p>
        <p class="childTitleEn">Interest</p>
        <div class="childSub" style="margin-top: 40px;"></div>
        <p class="childMun">申报必读</p>
       </div></a>
      <a href="./detail.html">
       <div class="child">
        <p class="childTitle">评选申报表索取</p>
        <p class="childTitleEn">Declaration form</p>
        <div class="childSub"></div>
        <p class="childMun">申报必读</p>
       </div></a>
     </div>
     <a href="./detail.html">
      <div class="linkBtn">
       <span>查看更多信息</span>
      </div></a>
    </div>
   </div>
   <div class="mainChild" id="mainChild2" style="background-image:url(Public/images/partner/mainBg.jpg);  background-color: #000;">
    <div class="content">
     <p class="title">Redwind+</p>
     <p class="info">这不是概念，是趋势</p>
    </div>
   </div>
   <div class="mainChild" id="mainChild3">
    <div class="container">
     <p class="mainsTitle">整合 让彼此更强大</p>
     <div class="mainSub"></div>
     <p class="mainsInfo">通过资源整合方案、开放合作和共赢的商业模式，赤风致力成为领先的整合品牌解决方案提供商。我们希望与有独到的商业眼光，而又充满才能的伙伴合作，在品牌的初创阶段参与到品牌建设的工作中来。伟大的品牌常常在这个阶段诞生。成为我们的战略合作伙伴，赤风合作伙伴生态系统都有相应的计划帮助您取得成功！</p>
     <div class="content">
      <a href="#" target="_blank">
       <div class="child ">
        <div class="childImg">
         <img src="images/1433506392.jpg" alt="30" title="30" />
        </div>
       </div></a>
      <a href="http://www.pidcn.com" target="_blank">
       <div class="child ">
        <div class="childImg">
         <img src="images/1433427282.jpg" alt="派点互动" title="派点互动" />
        </div>
       </div></a>
      <a href="#" target="_blank">
       <div class="child no">
        <div class="childImg">
         <img src="images/1433426692.jpg" alt="陈建业" title="陈建业" />
        </div>
       </div></a>
      <a href="#" target="_blank">
       <div class="child ">
        <div class="childImg">
         <img src="images/1433427830.jpg" alt="天意数码快印" title="天意数码快印" />
        </div>
       </div></a>
      <a href="#" target="_blank">
       <div class="child ">
        <div class="childImg">
         <img src="images/1433506856.jpg" alt="华盖" title="华盖" />
        </div>
       </div></a>
      <a href="#" target="_blank">
       <div class="child no">
        <div class="childImg">
         <img src="images/1433506490.jpg" alt="28" title="28" />
        </div>
       </div></a>
     </div>
     <div class="foot">
      <p class="title">开启合作</p>
      <div class="child">
       <div class="childContent one">
        <p>电话或邮件向赤风工作人员提供您的公司介绍及相关能力介绍</p>
       </div>
      </div>
      <img class="pointer" src="Public/images/partner/pointer.png" />
      <div class="child">
       <div class="childContent two two1">
        <p>相关企业或个人需提供完整的企业资质及成功案例，连同企业/个人简介</p>
        <p>营业执照彩色扫描件等，发送至赤风指定邮箱</p>
       </div>
      </div>
      <img class="pointer" src="Public/images/partner/pointer.png" />
      <div class="child">
       <div class="childContent one">
        <p>赤风工作人员收到邮件后会反馈参与进度（每一业务领域只招募1家）</p>
       </div>
      </div>
      <img class="pointer" src="Public/images/partner/pointer.png" />
      <div class="child">
       <div class="childContent two">
        <p>最后展开相关业务合作</p>
        <p>与赤风品牌进行工作对接</p>
       </div>
      </div>
      <img class="pointer" src="Public/images/partner/pointer.png" />
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