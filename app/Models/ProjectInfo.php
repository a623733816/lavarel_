<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    public $table = 'project_info';


    /**
     * @param $data
     * @return bool
     */
    public function add($data)
    {
        $new_data = [];
        foreach ($data as $k => &$item) {
            if ('' != $item) {
                $new_data[$k] = trim($item);
            }
        }
        if (!empty($new_data)) {
            $this->name = strlen($new_data['name']) > 45 ? mb_substr($new_data['name'], 0, 45, 'utf-8') : $new_data['name'];
            $this->company = strlen($new_data['company']) > 200 ? mb_substr($new_data['company'], 0, 200, 'utf-8') : $new_data['company'];
            $this->phone = strlen($new_data['phone']) > 11 ? mb_substr($new_data['phone'], 0, 11, 'utf-8') : $new_data['phone'];
            $this->project_theme = strlen($new_data['project_theme']) > 250 ? mb_substr($new_data['project_theme'], 0, 250, 'utf-8') : $new_data['project_theme'];//品牌名称
            $this->project_desc = strlen($new_data['email']) > 45 ? mb_substr($new_data['email'], 0, 45, 'utf-8') : $new_data['email'];
            $this->created_at = date('Y-m-d H:i:s');
            return $this->save();
        }
        return false;
    }
}
