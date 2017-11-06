<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaporanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function response(array $errors){
         return redirect()->back()->with('message', 'GAGAL!! Tahun Ajaran & Jenis Laporan harus dipilih!')->withErrors($errors)->withInput();
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
          'tahun_ajaran'  => 'required',
          'jenis_laporan' => 'required',
        ];
    }

    public function messages()
    {
      return [
            // 'title.required' => 'Title Tidak Boleh Kosong!',
            // 'title.max' => 'Title Maksimal 30 Karakter!',
        ];
    }
}
