<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SekolahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

     public function response(array $errors){
         return redirect()->back()->with('message', 'Gagal menyimpan data!')->withErrors($errors)->withInput();
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
          // Tentang Sekolah
          // 'nama' => 'required|max:40|regex:/^[\pL\s\-]+$/u',
          'teks' => 'required|max:3500',
          'lampiran' => 'mimes:jpeg,png,pdf,rar'
        ];
    }

    public function messages()
    {
      return [
          'teks.required' => 'Field teks tidak boleh kosong!',
          'teks.max' => 'Field teks maksimal 700 karakter!',
          'lampiran.mimes' => 'ekstensi yang hanya boleh (jpg,png,pdf,rar)!',
          'lampiran.max' => 'lampiran maksimal 1.5MB!',
        ];
    }
}
