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
        $new_data = $data;
        if (!empty($new_data)) {
            $this->name = strlen($new_data['name']) > 45 ? mb_substr($new_data['name'], 0, 45, 'utf-8') : $new_data['name'];
            $this->phone = strlen($new_data['phone']) > 45 ? mb_substr($new_data['phone'], 0, 45, 'utf-8') : $new_data['phone'];
            $this->company = strlen($new_data['company']) > 100 ? mb_substr($new_data['company'], 0, 100, 'utf-8') : $new_data['company'];
            $this->address_detail = strlen($new_data['address_detail']) > 100 ? mb_substr($new_data['address_detail'], 0, 100, 'utf-8') : $new_data['address_detail'];
            $this->created_at = date('Y-m-d H:i:s');
            return $this->save();
        }
        return false;
    }
}
