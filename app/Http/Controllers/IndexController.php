<?php

namespace App\Http\Controllers;

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
}