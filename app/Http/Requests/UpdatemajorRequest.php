<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMajorRequest extends FormRequest
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
            //setelah unique:nama tabel,nama field database,exception(di berikan pengecualian terhadap id yang dalam proses edit),
            //semisal nama tidak di cek lagi karena ingin mengupdate description melainkan cek menggunakan id
            "name"=>"required|max:75|unique:majors,name,".$this->major->id,
            "description"=>"required"
        ];
    }
}
