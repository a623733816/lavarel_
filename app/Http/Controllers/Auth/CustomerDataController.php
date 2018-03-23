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
use Validator;
use App\Http\Controllers\Controller;
use DB;

class CustomerDataController extends Controller
{
    //客服列表
    public function customerList()
    {
        return view('customer.customer_list')->withUsers(CustomerInfo::paginate(15));
    }
    //客户项目数据列表
    public function projectList()
    {
        return view('customer.project_list')->withUsers(ProjectInfo::paginate(15));
    }
}
