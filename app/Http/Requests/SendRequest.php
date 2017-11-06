<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function response(array $errors){
         return redirect('/pesan#tulis-pesan')->with('message', 'Pesan gagal dikirim!')->withErrors($errors)->withInput();
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
          'subject'  => 'required|max:30',
          'pesan' => 'required|max:250',
          'lampiran' => 'mimes:jpg,png,pdf,rar|max:1500'
        ];
    }

    public function messages()
    {
      return [
            'subject.required' => 'Subjek Tidak Boleh Kosong!',
            'subject.max' => 'Subject Maksimal 30 Karakter!',
            'pesan.required' => 'Pesan teks Tidak Boleh Kosong!',
            'pesan.max' => 'Pesan teks Maksimal 250 Karakter!',
            'lampiran.mimes' => 'Lampiran hanya boleh (jpg,png,pdf,rar)',
            'lampiran.max' => 'Lampiran tidak boleh lebih dari 1MB!',
        ];
    }
}
