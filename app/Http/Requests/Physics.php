<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Physics extends FormRequest
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
            'one' => 'required',
            'two' => 'required',
            'three' => 'required',
            'four' => 'required',
            'five' => 'required',
            'six' => 'required',
            'seven' => 'required',
            'eight' => 'required',
            'cone' => 'required',
            'ctwo' => 'required',
            'cthree' => 'required',
            'cfour' => 'required',
            'cfive' => 'required',
            'csix' => 'required',
            'cseven' => 'required',
            'ceight' => 'required',
            'cnine' => 'required',
            'cten' => 'required',
            'celeven' => 'required',
            'ctwelve' => 'required',


        ];
    }
    protected function failedValidation(Validator $validator){

        throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
    }
}
