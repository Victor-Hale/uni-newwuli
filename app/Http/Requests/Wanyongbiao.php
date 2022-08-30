<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Wanyongbiao extends FormRequest
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
            'one_ig' => 'required',
            'one_rg' => 'required',
            'one_e' => 'required',

            'two_one_rg' => 'required',
            'two_one_ig' => 'required',
            'two_one_im' => 'required',
            'two_one_r1' =>'required',
            'two_one_lx' => 'required',
            'two_one_rn' => 'required',
            'two_one_im2' => 'required',

            'two_two_vm' => 'required',
            'two_two_im' => 'required',
            'two_two_rn' => 'required',
            'two_two_r2' => 'required',
            'two_two_vx' => 'required',

            'two_thr_e' =>'required',
            'two_thr_im' => 'required',
            'two_thr_rn' => 'required',
            'two_thr_r3' => 'required',

            'two_four_e' => 'required',
            'two_four_i3' => 'required',
            'two_four_rx' => 'required',
            'two_four_r3rn' =>'required',
            'two_four_r4' => 'required',
            'two_four_rx2' => 'required',


            'thir_one_one' => 'required',
            'thir_one_two' => 'required',
            'thir_one_three' => 'required',
            'thir_one_four' => 'required',
            'thir_two_one' => 'required',
            'thir_two_two' => 'required',
        ];
    }
    protected function failedValidation(Validator $validator){

        throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
    }


}
