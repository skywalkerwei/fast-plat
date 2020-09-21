<?php

namespace App\Http\Requests;

class UserRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name'=>'required',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '请输入用户名',
            'password.required' => '请输入密码',
        ];
    }

}
