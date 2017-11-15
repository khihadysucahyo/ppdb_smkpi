<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function response(array $errors){
         return redirect()->back()->with('message', 'Info gagal disimpan!')->withErrors($errors)->withInput();
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
          'title'  => 'required|max:60',
          'isi_info' => 'required|max:700',
          'gambar' => 'mimes:jpeg,png,pdf,rar|max:1500',
          'lampiran' => 'mimes:jpeg,png,pdf,rar|max:1500',
        ];
    }

    public function messages()
    {
      return [
            'title.required' => 'Title Tidak Boleh Kosong!',
            'title.max' => 'Title Maksimal 60 Karakter!',
            'isi_info.required' => 'Info teks Tidak Boleh Kosong!',
            'isi_info.max' => 'Info teks Maksimal 700 Karakter!',
            'gambar.mimes' => 'Gambar hanya boleh (jpg,png,pdf,rar)',
            'gambar.max' => 'Gambar tidak boleh lebih dari 1.5MB!',
            'lampiran.mimes' => 'Lampiran hanya boleh (jpg,png,pdf,rar)',
            'lampiran.max' => 'Lampiran tidak boleh lebih dari 1.5MB!',
        ];
    }
}
