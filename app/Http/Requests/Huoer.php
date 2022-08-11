<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Huoer extends FormRequest
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
            'number' => 'required',
            'constant' => 'required',
            'a1' => 'required',
            'a2' => 'required',
            'a3' => 'required',
            'a4' => 'required',
            'a5' => 'required',
            'a6' => 'required',
            'b1' => 'required',
            'b2' => 'required',
            'b3' => 'required',
            'b4' => 'required',
            'b5' => 'required',
            'b6' => 'required',
            'c1' => 'required',
            'c2' => 'required',
            'c3' => 'required',
            'c4' => 'required',
            'c5' => 'required',
            'c6' => 'required',
            'd1' => 'required',
            'd2' => 'required',
            'd3' => 'required',
            'd4' => 'required',
            'd5' => 'required',
            'd6' => 'required',
            'e1' => 'required',
            'e2' => 'required',
            'e3' => 'required',
            'e4' => 'required',
            'e5' => 'required',
            'e6' => 'required',
            'f1' => 'required',
            'f2' => 'required',
            'f3' => 'required',
            'f4' => 'required',
            'f5' => 'required',
            'f6' => 'required',
            'g1' => 'required',
            'g2' => 'required',
            'g3' => 'required',
            'g4' => 'required',
            'g5' => 'required',
            'g6' => 'required',
            'h1' => 'required',
            'h2' => 'required',
            'h3' => 'required',
            'h4' => 'required',
            'h5' => 'required',
            'h6' => 'required',
            'i1' => 'required',
            'i2' => 'required',
            'i3' => 'required',
            'i4' => 'required',
            'i5' => 'required',
            'i6' => 'required',
            'j1' => 'required',
            'j2' => 'required',
            'j3' => 'required',
            'j4' => 'required',
            'j5' => 'required',
            'j6' => 'required',
            'k1' => 'required',
            'k2' => 'required',
            'k3' => 'required',
            'k4' => 'required',
            'k5' => 'required',
            'k6' => 'required',
            'l1' => 'required',
            'l2' => 'required',
            'l3' => 'required',
            'l4' => 'required',
            'l5' => 'required',
            'l6' => 'required',
            'm1' => 'required',
            'm2' => 'required',
            'm3' => 'required',
            'm4' => 'required',
            'm5' => 'required',
            'm6' => 'required',
            'n1' => 'required',
            'n2' => 'required',
            'n3' => 'required',
            'n4' => 'required',
            'n5' => 'required',
            'n6' => 'required',
            'o1' => 'required',
            'o2' => 'required',
            'o3' => 'required',
            'o4' => 'required',
            'o5' => 'required',
            'o6' => 'required',
            'p1' => 'required',
            'p2' => 'required',
            'p3' => 'required',
            'p4' => 'required',
            'p5' => 'required',
            'p6' => 'required',
            'xz1' => 'required',
            'xz2' => 'required',
            'xz3' => 'required',
            'xz4' => 'required',
            'tu' => 'required',
            'grade_xp' => 'required'
        ];
    }
    protected function failedValidation(Validator $validator){

        throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
    }
}
