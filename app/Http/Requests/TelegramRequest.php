<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelegramRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

     public function response(array $errors){
         return redirect()->back()->with('message', 'Gagal menyimpan pengaturan Telegram!')->withErrors($errors)->withInput();
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
          'chat_id' => 'required|numeric|digits_between:1,11',
          // 'teks' => 'required|max:50',
        ];
    }

    public function messages()
    {
      return [
          'chat_id.required' => 'Chat ID harus diisi!',
          'chat_id.numeric' => 'Chat ID hanya boleh angka',
          'chat_id.digits_between' => 'Chat ID maksimal 11 digit',
          // 'teks.required' => 'teks harus diisi!',
          // 'teks.max' => 'teks maksimal 50 karakter',
        ];
    }
}
