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
            $new_data[$k] = trim($item);
        }
        if (!empty($new_data)) {
            $this->name = $new_data['name'];
            $this->company = $new_data['company'];
            $this->phone = $new_data['phone'];
            $this->project_theme = $new_data['project_theme'];//品牌名称
            $this->project_desc = $new_data['email'];
            $this->created_at = date('Y-m-d H:i:s');
        }
        return $this->save();
    }
}
