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
        return view('index.index');
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