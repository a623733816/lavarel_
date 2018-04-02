<!-- header -->
<div class="header">
    <a href="/index.html"><img class="logo1" src="{{URL::asset('assets/images/images/logo.jpg')}}" title="全国重点品牌"/></a>
    <img class="navBtn" src="{{URL::asset('assets/images/images/navBtn.png')}}" title="点我!点我!"/>
    <div class="container">
        <ul class="nav">
            <a href="#">
                <li  @if($active=='index')class="on navBtn_" @endif>首页</li>
            </a>
            <a href="#">
                <li  @if($active=='superiority')class="on navBtn_" @endif>最新动态</li>
            </a>
            <a href="#">
                <li  @if($active=='project')class="on navBtn_" @endif>重点品牌</li>
            </a>
            <!--<a href=" @if($active=='partner') javascript:void(0) @endif{{URL::asset('partner')}}">
                <li  @if($active=='partner')class="on" @endif>伙伴</li>
            </a>-->
            <a href="#">
                <li  @if($active=='superiority')class="on navBtn_" @endif>领军人物</li>
            </a>
            <!--<a href="@if($active=='redwind') javascript:void(0) @endif{{URL::asset('redwind')}}">
                <li  @if($active=='redwind')class="on navBtn_" @endif>申报表索取</li>
            </a>
            <a href="#">
                <li  @if($active=='news')class="on navBtn_" @endif>品牌明星</li>
            </a>-->
            <a href="#">
                <li  @if($active=='partner')class="on navBtn_" @endif>入选条件</li>
            </a>
            <a href="#">
                <li  @if($active=='contact')class="on" @endif>联系我们</li>
            </a>
        </ul>
    </div>
</div>