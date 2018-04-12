@extends('index.lay')

@section('body')
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
    <div class="main">
        <div class="container">
            <div class="title">
                <p>叩开通往国家品牌的大门</p>
                <p>全面启动《全国重点品牌发展规划(2018年-2020年)》</p>
                <span>今年将举办改革开放40年品牌建设高质量成果表彰大会</span>
                <span class="line"></span>
            </div>
            <div class="content">
                <p>一、规划背景：</p>
                <span>今天中国经济的发展，比任何时候都需要一批能够在全球市场上代表国家形象来参与商业竞争、文化交流的国家品牌，“品牌战略”已上升为国家战略。发挥品牌引领作用，推进品牌建设，必须聚焦现代企业的成长潜力。现代企业，尤其是中小企业，是中国经济的脊梁，是推动中国经济社会发展的重要力量。</span>
                <span>2018年是中国改革开放四十周年。为全面反映改革开放以来企业品牌建设的高质量成果，提高品牌信用建设影响力和市场竞争力，全国重点品牌示范工程办公室从今年起将“全国重点品牌评选”工作纳入《全国重点品牌发展规划(2018-2020年)》，对入选的重点品牌提供必要的扶持和配套服务，培育和助推一批高质量、高信誉、高市场占有率和高附加值的成长性品牌向全国重点品牌发展，支持重点品牌企业进入国家品牌发展计划。</span>
                <p>二、活动安排：</p>
                <span>1、申报时间：2018年4月至2018年7月30日。</span>
                <span>2、评审时间：2018年7月至2018年9月。</span>
                <span>3、入选公示：2018年9月在中央重点新闻网站集中公示宣传。</span>
                <span>4、颁奖表彰：2018年11月隆重举办“改革开放40年品牌建设高质量成果表彰大会”。</span>
                <p>三、申报范围：</p>
                <span>企业品牌、产品品牌、成长性品牌、自主创新品牌、中华老字号品牌、旅游区域品牌。其中包括：食品、养生保健、餐饮、建材建筑装饰、农业、服装、轻工、电子商务、医药、汽车及配件制造、印刷、包装、礼品、金融业、信息技术、商业零售等行业。</span>
                <p>四、申报条件：</p>
                <span>1、申报单位应是在当地政府主管部门注册登记的企事业单位，并具有独立法人资格。经营服务规范，无不良信用记录，在推动改革、品牌管理等方面走在高质量发展前列。</span>
                <span>2、善于探索企业品牌文化建设的实施方法和手段，企业品牌战略富有成果。在诚信立本、科技创新、质量保证、消费引领，情感维护等方面总结出新鲜经验。</span>
                <span>3、重视品牌建设、探索品牌价值发现，新品牌茁壮成长，老品牌焕发青春，总结出为国家提供产品经济向品牌经济转型发展的的成功案例。</span>
                <span>4、在质量、创新、诚信、文化、人才、营销、知识产权保护等方面，具有管理规范、业绩突出、公信度高等示范作用。</span>
                <span>5、有健全的品牌管理制度和品牌管理团队，其中大专及以上学历和中级及以上技术职称专业人员的比例占80%以上。</span>
                <span>6、在创新服务模式，集聚创新资源，推进线上线下服务结合，促进服务与需求精准对接，激发企业创新活力、发展潜力和转型动力，推动创新驱动发展方面具有突出的优势和示范性。</span>
                <p>五、申报方法：</p>
                <span>1、网上申报与书面申报结合。单位自愿申报，企业主管部门和有关社团可以推荐。申报和推荐必须坚持实事求是原则，对其真实性负责。</span>
                <span>2、申报材料：《全国重点品牌申报单位基本情况表》《申报单位品牌建设体系自查情况表》</span>
                <span>3、申报邮箱ssd@vip.163.com，官方咨询微信ppchina2018。</span>
                <p>六、评审标准</p>
                <span>参照《商业企业品牌评价与企业文化建设指南》（GB/T 27925-2011），从“企业品牌、企业文化、企业精神、品牌保护、品牌评价、品牌管理、商品质量、服务质量以及社会责任”等主要指标进行综合评审。</span>
                <p>七、提供16项扶持和配套服务</p>
                <span>据全国重点品牌示范工程评选组委会首席品牌专家、复旦大学华商研究中心主任徐培华教授介绍，入选后的重点品牌将得到《全国重点品牌发展规划(2018-2020年)》中提供的16项扶持和配套服务。他认为，今天中国经济的发展，比任何时候都需要一批能够在全球市场上代表国家形象来参与商业竞争、文化交流的国家品牌，“品牌战略”已上升为国家战略。发挥品牌引领作用，推进品牌建设，必须聚焦现代企业的成长潜力。现代企业，尤其是中小企业，是中国经济的脊梁，是推动中国经济社会发展的重要力量。</span>
                <span>据了解，《全国重点品牌发展规划(2018-2020年)》的主要任务就是要围绕企业品牌建设，提供智慧支撑和智力支持。不仅如此，通过培育和构建国家品牌战略的“第二方阵”，助力并支持重点品牌企业进入国家品牌发展计划，成为品牌经济发展的“重点样本”，起到领军示范作用。</span>
            </div>
            <a href="">
                <div class="linkBtn">
                    <span>&nbsp;&nbsp;&nbsp;查看其它</span>
                </div>
            </a>
        </div>
    </div>
    <!-- main over -->
    <!-- footer -->
@endsection