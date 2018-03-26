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
                <li  @if($active=='superiority')class="on" @endif>国家品牌智库</li>
            </a>
            <a href="{{URL::asset('project')}}">
                <li  @if($active=='project')class="on" @endif>评审标准</li>
            </a>
            <a href="{{URL::asset('project')}}">
                <li  @if($active=='project')class="on" @endif>评审标准</li>
            </a>
            <a href="{{URL::asset('redwind')}}">
                <li  @if($active=='redwind')class="on" @endif>申报表索取</li>
            </a>
            <a href="{{URL::asset('news')}}">
                <li  @if($active=='news')class="on" @endif>品牌明星</li>
            </a>
            <a href="{{URL::asset('partner')}}">
                <li  @if($active=='partner')class="on" @endif>品牌总裁</li>
            </a>
            <a href="{{URL::asset('contact')}}">
                <li  @if($active=='contact')class="on" @endif>联系我们</li>
            </a>
        </ul>
    </div>
</div>