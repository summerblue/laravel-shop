<?php

namespace App\Http\Requests;

class ApplyRefundRequest extends Request
{
    public function rules()
    {
        return [
            'reason' => 'required',
        ];
    }

    public function attributs()
    {
        return [
            'reason' => '原因',
        ];
    }
}
