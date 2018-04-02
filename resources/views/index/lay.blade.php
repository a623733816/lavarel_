<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>全国重点品牌●申报服务</title>
    <meta name="robots" content="all"/>
    <meta name="author" content="redwind design"/>
    <meta name="Copyright" content="Copyright 2001-2015 All Rights Reserved Redwind design co.,ltd."/>
    <meta name="description"
          content="全国重点品牌●申报服务"/>
    <meta name="keywords"
          content="全国重点品牌●申报服务"/>
    <meta name="searchtitle"
          content="全国重点品牌●申报服务"/>
    <link href="{{URL::asset('assets/images/images/favicon.ico')}}" rel="shortcut icon"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/newWeb/font.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/newWeb/base.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/newWeb/'.$active.'.css')}}"/>
    <script src="{{URL::asset('assets/js/newWeb/jquery-1.11.0.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{URL::asset('assets/js/newWeb/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/newWeb/respond.min.js')}}"></script><![endif]-->
    <script charset="utf-8" src="{{URL::asset('assets/other/wpa.php')}}"></script>
</head>
<body>

@include('common.header')
@section('body')

@show
@include('common.footer')

<script src="{{URL::asset('assets/js/newWeb/'.$active.'.js')}}"></script>
</body>
</html>