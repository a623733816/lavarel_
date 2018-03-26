<?php

namespace App\Http\Controllers;

use App\Models\CustomerInfo;
use App\Models\ProjectInfo;
use Illuminate\Http\Request;
use App\Http\Requests;

/**
 * 前台展示接口及两个提交接口
 * Class IndexController
 * @package App\Http\Controllers
 */

class IndexController extends Controller
{
    public function index()
    {
        return view('index.index',['active'=>__FUNCTION__]);
    }
    public function job()
    {
        return view('index.job',['active'=>__FUNCTION__]);
    }
    public function news()
    {
        return view('index.news',['active'=>__FUNCTION__]);
    }
    public function partner()
    {
        return view('index.partner',['active'=>__FUNCTION__]);
    }
    public function redwind()
    {
        return view('index.redwind',['active'=>__FUNCTION__]);
    }
    public function superiority()
    {
        return view('index.superiority',['active'=>__FUNCTION__]);
    }
    public function project()
    {
        return view('index.project',['active'=>__FUNCTION__]);
    }
    public function contact()
    {
        return view('index.contact',['active'=>__FUNCTION__]);
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
        dd($posts);
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
        dd($posts);
        return $c_model->add($posts);
    }
}