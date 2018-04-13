<?php

namespace App\Http\Controllers;

use App\Models\BannerInfo;
use App\Models\CustomerInfo;
use App\Models\ProjectInfo;
use App\Models\WebPageInfo;
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
        return view('index.index')
            ->with('banner_data', BannerInfo::all())
            ->with('zuixin_data', WebPageInfo::where(['type' => 1])->skip(0)->take(3)->get())
            ->with('zhongdian_data', WebPageInfo::where(['type' => 2])->skip(0)->take(15)->get());
    }

    public function job()
    {
        return view('index.job');
    }

    /**
     * 最新动态
     * @return $this
     */
    public function news()
    {
        return view('index.news')->with('zuixin_data', WebPageInfo::where(['type' => 1])->skip(0)->take(3)->get());
    }

    /**
     * 入选条件
     * @return $this
     */
    public function partner()
    {
        return view('index.partner')->with('ruxuan_data', WebPageInfo::where(['type' => 4])->orderby('created_at', ' desc')->first());
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redwind()
    {
        return view('index.redwind');
    }

    /**
     * 领军人物
     * @return $this
     */
    public function superiority()
    {
        return view('index.superiority')->with('lingjun_data', WebPageInfo::where(['type' => 3])->skip(0)->take(3)->get());
    }

    /**
     * 获取分页数据
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getWebData(Request $request)
    {
        $data = $request->all();
        $page = $data['page'];
        $page_size = $data['page_size'];
        $type = $data['type'];
        $page_num = $page_size * ($page - 1);
        $data = WebPageInfo::where(['type' => $type])->skip($page_num)->take($page_size)->get();
        return Response()->json(['msg' => '成功！', 'data' => $data, 'code' => 2000], 200);
    }

    /**
     * 重点品牌
     * @return $this
     */
    public function project()
    {
        return view('index.project')->with('zhongdian_data', WebPageInfo::where(['type' => 2])->skip(0)->take(15)->get());
    }

    public function contact()
    {
        return view('index.contact');
    }

    /**
     * 页面详情
     * @param $id
     * @return $this
     */
    public function detail($id)
    {
        return view('index.detail' . $id)->with('detail_data', WebPageInfo::find($id));
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