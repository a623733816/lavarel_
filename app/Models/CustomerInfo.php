<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    public $table = 'customer_info';

    /**
     * @param $data
     * @return bool
     */
    public function add($data)
    {
        $new_data = [];
        foreach ($data as $k => &$item) {
            if ('' != trim($item)) {
                $new_data[$k] = trim($item);
            }
        }
        if (!empty($new_data)) {
            $this->name = strlen($new_data['name']) > 45 ? mb_substr($new_data['name'], 0, 45, 'utf-8') : $new_data['name'];
            $this->phone = strlen($new_data['phone']) > 11 ? mb_substr($new_data['phone'], 0, 11, 'utf-8') : $new_data['phone'];
            $this->email = strlen($new_data['email']) > 45 ? mb_substr($new_data['email'], 0, 45, 'utf-8') : $new_data['email'];
            $this->type = $new_data['type'];//1明星，２总裁
            $this->created_at = date('Y-m-d H:i:s');
            return $this->save();
        }
        return false;
    }
}
