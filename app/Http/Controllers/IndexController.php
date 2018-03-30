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
        view()->share('active', $fun_);
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
        $posts = $request->all();
        if ($p_model->add($posts))
            return Response()->json(['msg' => '成功！', 'code' => 2000], 200);
        return Response()->json(['msg' => '失败！', 'code' => 4000], 200);
    }

    /**
     * 添加客户信息接口
     * @param CustomerInfo $c_model
     * @param Request $request
     * @return bool
     */
    public function addCustomerInfo(CustomerInfo $c_model, Request $request)
    {
        $posts = $request->all();
        foreach ($posts as $k => $item) {
            if (in_array($k, ['name', 'phone', 'company', 'address_detail'])) {
                if ('' == trim($item)) {
                    return Response()->json(['msg' => '请填写完整信息！', 'code' => 4000], 200);
                }
                $new_data[$k] = trim($item);
            }
        }
        if (empty($new_data)) {
            return Response()->json(['msg' => '非法操作！', 'code' => 4000], 200);
        }
        if ($c_model->add($new_data))
            return Response()->json(['msg' => '提交成功！', 'code' => 2000], 200);
        return Response()->json(['msg' => '提交失败！', 'code' => 4000], 200);
    }
}