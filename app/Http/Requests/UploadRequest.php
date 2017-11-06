<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function response(array $errors){
         return redirect()->back()->with('message', 'Gagal Upload Foto!')->withErrors($errors)->withInput();
     }

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
            'foto_upload' => 'mimes:jpeg,jpg,png|max:150|required'
        ];
    }

    public function messages()
    {
      return [
            'foto_upload.mimes' => 'Gambar hanya boleh (jpg,png,pdf,rar)',
            'foto_upload.max' => 'Gambar tidak boleh lebih dari 1.5MB!',
        ];
    }
}
