<?php

namespace App\Http\Controllers\Auth;

use App\Models\BannerInfo;
use App\Models\WebPageInfo;
use App\Models\WebPageType;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use DB;

class WebPageController extends Controller
{
    public function banner()
    {
        return view('webSet.banner')->with('banner_info', BannerInfo::paginate(15));
    }

    public function page()
    {
        $colum_data = array_column(WebPageType::all()->toArray(), 'name', 'id');
        return view('webSet.page')->with('web_page_type', $colum_data)->with('web_page_info', WebPageInfo::paginate(15));
    }


    /**
     * 提交页面信息
     * @param WebPageInfo $webPageInfo
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addPageInfo(WebPageInfo $webPageInfo, Request $request)
    {
        $data = $request->input();
        //判断是否有ｉｄ，有就修改
        if (isset($data['id']) && '' != $data['id']) {
            $webPageInfo = $webPageInfo::find($data['id']);
        } else {
            $webPageInfo->created_at = date('Y-m-d H:i:s');
        }
        foreach ($data as $k => $item) {
            if ('' == $item && $k != 'id') {
                return Response()->json(['msg' => '请填写完整信息！', 'code' => 4000], 200);
            }
            if (in_array($k, ['img_path', 'f_img_path'])) {
                $item = $item[0];
            }
            if (!in_array($k, ['_token', 'q', 'id'])) {//过滤多余字段
                $webPageInfo->$k = $item;
            }
        }
        if ($webPageInfo->save())
            return Response()->json(['msg' => '成功！', 'code' => 2000], 200);
        return Response()->json(['msg' => '失败！', 'code' => 4000], 200);
    }

    /**
     * 添加页面信息页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addPageView()
    {
        $colum_data = array_column(WebPageType::all()->toArray(), 'name', 'id');
        return view('webSet.setPage')->with('web_page_type', $colum_data);
    }

    /**
     * 修改页面信息页面
     * @param WebPageInfo $webPageInfo
     * @param $id
     * @return mixed
     */
    public function editPageView(WebPageInfo $webPageInfo, $id)
    {
        if (!$id) return false;
        $colum_data = array_column(WebPageType::all()->toArray(), 'name', 'id');
        return view('webSet.setPage')
            ->with('web_page_type', $colum_data)
            ->with('edit_info', $webPageInfo->find($id));
    }

    /**
     * 删除
     * @param WebPageInfo $webPageInfo
     * @param $id
     * @return bool|\Illuminate\Http\JsonResponse
     */
    public function deletePage(WebPageInfo $webPageInfo, $id)
    {
        if (!$id) return Response()->json(['msg' => '失败！', 'code' => 4000], 200);
        if ($webPageInfo->destroy($id))
            return Response()->json(['msg' => '成功！', 'code' => 2000], 200);
        return Response()->json(['msg' => '失败！', 'code' => 4000], 200);
    }

    /**
     * 提交ｂａｎｎｅｒ信息
     * @param BannerInfo $bannerInfo
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addBannerInfo(BannerInfo $bannerInfo, Request $request)
    {
        $data = $request->input();
        //判断是否有ｉｄ，有就修改
        if (isset($data['id']) && '' != $data['id']) {
            $bannerInfo = $bannerInfo::find($data['id']);
        } else {
            $bannerInfo->created_at = date('Y-m-d H:i:s');
        }
        foreach ($data as $k => $item) {
            if ('' == $item && $k != 'id') {
                return Response()->json(['msg' => '请填写完整信息！', 'code' => 4000], 200);
            }
            if ($k == 'img_path') {
                $item = $item[0];
            }
            if (!in_array($k, ['_token', 'q', 'id'])) {//过滤多余字段
                $bannerInfo->$k = $item;
            }
        }
        if ($bannerInfo->save())
            return Response()->json(['msg' => '成功！', 'code' => 2000], 200);
        return Response()->json(['msg' => '失败！', 'code' => 4000], 200);
    }

    /**
     * 添加ｂａｎｎｅｒ页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addBannerView()
    {
        return view('webSet.setBanner');
    }

    /**
     * 修改ｂａｎｎｅｒ页面
     * @param BannerInfo $bannerInfo
     * @param $id
     * @return $this
     */
    public function editBannerView(BannerInfo $bannerInfo, $id)
    {
        if (!$id) return false;
        return view('webSet.setBanner')->with('edit_info', $bannerInfo->find($id));
    }

    /**
     * 删除
     * @param BannerInfo $bannerInfo
     * @param $id
     * @return bool|\Illuminate\Http\JsonResponse
     */
    public function deleteBanner(BannerInfo $bannerInfo, $id)
    {
        if (!$id) return Response()->json(['msg' => '失败！', 'code' => 4000], 200);
        if ($bannerInfo->destroy($id))
            return Response()->json(['msg' => '成功！', 'code' => 2000], 200);
        return Response()->json(['msg' => '失败！', 'code' => 4000], 200);
    }

    /**
     * 多文件上传
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function mostUploads(Request $request)
    {
        $file = $request->file('myfile');
        if (empty($file)) {
            return Response()->json(['msg' => '没有发现文件！', 'code' => 4000], 200);
        }
        if (is_object($file))//如果是对象那么是单文件上传
        {
            $file = [$file];
        }
        foreach ($file as $key => $value) {
            if (!empty($value)) {//此处防止没有多文件上   传的情况
                $allowed_extensions = ["png", "jpg", "gif"];
                //文件类型判断
                if ($value->getClientOriginalExtension() && !in_array($value->getClientOriginalExtension(), $allowed_extensions)) {
                    return Response()->json(['msg' => '请上传:"' . explode(',', $allowed_extensions) . '",格式文件', 'code' => 4000], 200);
                }
                //文件的大小限制
                if ($value->getClientSize() < 8 * 1024) {
                    return Response()->json(['msg' => '上传文件大小不超过８M!', 'code' => 4000], 200);
                }
                $destinationPath = 'storage/uploads/'; //public 文件夹下面建 storage/uploads 文件夹
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath);
                }
                $extension = $value->getClientOriginalExtension();
                $fileName = str_random(10) . '.' . $extension;//重命名
                $value->move($destinationPath, $fileName);
                $filePath[] = asset($destinationPath . $fileName);
            }
        }
        if (!empty($filePath)) {
            return Response()->json(['msg' => '上传成功！', 'data' => $filePath, 'code' => 2000], 200);
        } else {
            return Response()->json(['msg' => '上传失败！', 'code' => 4000], 200);
        }
    }

    public function test($id)
    {
        dd($id);
    }
}
