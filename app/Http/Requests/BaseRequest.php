<?php

namespace App\Http\Requests;

use App\Exceptions\ApiException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class BaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    // JSON下自定义数据返回格式
    protected function failedValidation(Validator $validator)
    {
         throw new ApiException($validator->errors()->all()[0]);

    }
}


