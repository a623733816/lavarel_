<?php

namespace App\Http\Controllers;

use App\Models\CustomerInfo;
use App\Models\ProjectInfo;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redis;

/**
 * 前台展示接口及两个提交接口
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    public function __construct(Request $request)
    {
        $fun_ = explode('@', $request->route()->getAction()['controller'])[1];
        view()->share('active',$fun_);
    }

    public function index()
    {
        return view('index.index');
    }

    public function job()
    {
        return view('index.job');
    }

    public function news()
    {
        return view('index.news');
    }

    public function partner()
    {
        return view('index.partner');
    }

    public function redwind()
    {
        return view('index.redwind');
    }

    public function superiority()
    {
        return view('index.superiority');
    }

    public function project()
    {
        return view('index.project');
    }

    public function contact()
    {
        return view('index.contact');
    }

    /**
     * 添加项目业务信息接口
     * @param ProjectInfo $p_model
     * @param Request $request
     * @return bool
     */
    public function addProjectInfo(ProjectInfo $p_model, Request $request)
    {
        $posts = $request->input();
        return $p_model->add($posts);
    }

    /**
     * 添加客户信息接口
     * @param CustomerInfo $c_model
     * @param Request $request
     * @return bool
     */
    public function addCustomerInfo(CustomerInfo $c_model, Request $request)
    {
        $posts = $request->input();
        return $c_model->add($posts);
    }
}