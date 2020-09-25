<?php

namespace App\Http\Requests;

/**
 * @bodyParam  name string  required 用户名  Example: demo
 * @bodyParam  password string required 密码  Example: 123456
 */
class RegPost extends  BaseRequest
{
    public function rules()
    {
        return [
            'name'=>'required|unique:App\Repository\Models\User,name',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '请输入用户名',
            'name.unique' => '用户名重复,请重新输入',
            'password.required' => '请输入密码',
        ];
    }
}
