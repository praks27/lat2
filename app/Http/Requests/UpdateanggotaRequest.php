<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateanggotaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return true untuk mengedit data tidak perlu login
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
            //kondisi untuk input data
            "name"=>"required|max:50",
            "date_birth"=>"required|date",
            "gender"=>"required|in:male,female",
            "address"=>"required"
        ];
    }
}
