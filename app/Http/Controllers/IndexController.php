<?php

namespace App\Http\Controllers;

use App\Models\CustomerInfo;
use App\Models\ProjectInfo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Excel;
use DB;

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
    public function addProjectInfo(ProjectInfo $p_model, Request $request)
    {
        $posts = $request->input();
        dd($posts);
        return $p_model->add($posts);
    }

    public function addCustomerInfo(CustomerInfo $c_model, Request $request)
    {
        $posts = $request->input();
        dd($posts);
        return $c_model->add($posts);
    }
}