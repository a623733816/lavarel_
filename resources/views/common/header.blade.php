<!-- header -->
<div class="header">
    <a href="/index.html"><img class="logo1" src="{{URL::asset('assets/images/images/logo.jpg')}}" title="赤风品牌策划与设计"/></a>
    <img class="navBtn" src="{{URL::asset('assets/images/images/navBtn.png')}}" title="点我!点我!"/>
    <div class="container">
        <ul class="nav">
            <a href="@if($active=='index') javascript:void(0) @endif{{URL::asset('index')}}">
                <li  @if($active=='index')class="on navBtn_" @endif>首页</li>
            </a>
            <a href="@if($active=='superiority') javascript:void(0) @endif{{URL::asset('superiority')}}">
                <li  @if($active=='superiority')class="on navBtn_" @endif>国家品牌智库</li>
            </a>
            <a href="@if($active=='project') javascript:void(0) @endif{{URL::asset('project')}}">
                <li  @if($active=='project')class="on navBtn_" @endif>评审标准</li>
            </a>
            <a href="@if($active=='project') javascript:void(0) @endif{{URL::asset('project')}}">
                <li  @if($active=='project')class="on navBtn_" @endif>评审标准</li>
            </a>
            <a href="@if($active=='redwind') javascript:void(0) @endif{{URL::asset('redwind')}}">
                <li  @if($active=='redwind')class="on navBtn_" @endif>申报表索取</li>
            </a>
            <a href="@if($active=='news') javascript:void(0) @endif{{URL::asset('news')}}">
                <li  @if($active=='news')class="on navBtn_" @endif>品牌明星</li>
            </a>
            <a href="@if($active=='partner') javascript:void(0) @endif{{URL::asset('partner')}}">
                <li  @if($active=='partner')class="on navBtn_" @endif>品牌总裁</li>
            </a>
            <a href="@if($active=='contact') javascript:void(0) @endif{{URL::asset('contact')}}">
                <li  @if($active=='contact')class="on navBtn_" @endif>联系我们</li>
            </a>
        </ul>
    </div>
</div>