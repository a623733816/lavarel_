<?php

namespace App\Http\Controllers\Auth;

use App\Models\CustomerInfo;
use App\Models\Menu;
use App\Models\PermissionRole;
use App\Models\ProjectInfo;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Http\Controllers\Controller;
use DB;

class WebPageController extends Controller
{
    public function banner()
    {
        return view('webSet.banner')->withUsers(CustomerInfo::paginate(15));
    }

    public function page()
    {
        return view('webSet.page')->withUsers(ProjectInfo::paginate(15));
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
            return Response()->json(['msg' => '没有发现文件！', 'code' => 4000], 400);
        }
        foreach ($file as $key => $value) {
            if (!empty($value)) {//此处防止没有多文件上   传的情况
                $allowed_extensions = ["png", "jpg", "gif"];
                //文件类型判断
                if ($value->getClientOriginalExtension() && !in_array($value->getClientOriginalExtension(), $allowed_extensions)) {
                    return Response()->json(['msg' => '请上传:"' . explode(',', $allowed_extensions) . '",格式文件', 'code' => 4000], 400);
                }
                //文件的大小限制
                if ($value->getClientSize() < 8 * 1024) {
                    return Response()->json(['msg' => '上传文件大小不超过８M!', 'code' => 4000], 400);
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
            return Response()->json(['msg' => '上传失败！', 'code' => 4000], 400);
        }
    }
}
