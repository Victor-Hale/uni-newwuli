<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Xiangshi extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ra1' => 'required',
            'ra2' => 'required',
            'ra3' => 'required',
            'rx'  => 'required',
            'rx1' => 'required',
            'rx2' => 'required',
            'rx3' => 'required',
            'rb1' => 'required',
            'rb2' => 'required',
            'rb3' => 'required',
            'rchange1a' => 'required',
            'rchange2a' => 'required',
            'rchange3a' => 'required',
            's1' => 'required',
            's2' => 'required',
            's3' => 'required',
            's'   => 'required',
            'rc1' => 'required',
            'rc2' => 'required',
            'rc3' => 'required',
            'rwait1' => 'required',
            'rwait2' => 'required',
            'rwait3' => 'required',
            'xz1' => 'required',
            'xz2' => 'required',
            'pd1' => 'required',
            'pd2' => 'required',
        ];
    }
    protected function failedValidation(Validator $validator){

        throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
    }

}
