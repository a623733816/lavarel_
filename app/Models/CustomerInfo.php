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
            $new_data[$k] = trim($item);
        }
        if (!empty($new_data)) {
            $this->name = $new_data['name'];
            $this->phone = $new_data['phone'];
            $this->email = $new_data['email'];
            $this->type = $new_data['type'];//1明星，２总裁
            $this->created_at = date('Y-m-d H:i:s');
        }
        return $this->save();
    }
}
