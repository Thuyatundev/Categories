<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Postrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'title'=>'required',
           'body'=>'required|min:5'
        ];
    }

    public function messages(){
        return[
            // 'title.required'=>'ခေါင်းစဥ်ထည့်',
            //  'body.required'=>'စာသားထည့်',
            // 'body.min'=>'နည်းဆူ'
        ];
    }

    public function attributes(){
        return[
            'title'=>'Content'
        ];
    }
}
