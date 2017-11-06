<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpanRequest extends FormRequest
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
          // Data diri
          'nama' => 'required|max:40|regex:/^[\pL\s\-]+$/u',
          'tempat_lahir' => 'required|max:20|alpha',
          'tanggal_lahir'=> 'required',
          'jenkel' => 'required',
          'gol_darah' => 'required|alpha',
          'berat' => 'required|numeric|digits_between:1,3',
          'tinggi'=> 'required|numeric|digits_between:1,3',
          'alamat'=> 'required|max:100',
          'agama' => 'required',
          'asal_sekolah' => 'required|max:40',
          'alamat_sekolah' => 'required|max:100',
          'tahun'=> 'required',
          'no_hp'=> 'required|numeric|digits_between:1,13',
          // Data ortu:
          'nama_ayah' => 'required|max:40|regex:/^[\pL\s\-]+$/u',
          'nama_ibu' => 'required|max:40|regex:/^[\pL\s\-]+$/u',
          'no_ortu'=> 'required|numeric|digits_between:1,13',
          'pekerjaan_ayah' => 'required',
          'pekerjaan_ibu' => 'required',
          'alamat_ortu'=> 'required|max:100',
          // 'lampiran'=> MyLib::LampiranBiodata($request),
          // Nilai:
          'n_ipa' => 'required|numeric|max:100',
          'n_math' => 'required|numeric|max:100',
          'n_bindo' => 'required|numeric|max:100',
          'n_bing'=> 'required|numeric|max:100',
        ];
    }

    public function messages()
    {
      return [
          'nama.required' => 'Nama lengkap tidak boleh kosong!',
          'nama.max' => 'Nama lengkap maksimal 40 karakter!',
          'nama.regex' => 'Nama lengkap hanya boleh huruf!',
          'tempat_lahir.required' => 'Tempat lahir tidak boleh kosong!',
          'tempat_lahir.max' => 'Tempat lahir maksimal 20 karakter!',
          'tempat_lahir.alpha' => 'Tempat lahir lengkap hanya boleh huruf!',
          'tanggal_lahir.required'=> 'Tanggal lahir belum dipilih!',
          'jenkel.required' => 'Pilih salah satu jenis kelamin!',
          'gol_darah.required' => 'Field Golongan darah tidak boleh kosong!',
          'gol_darah.alpha' => 'Golongan darah hanya boleh huruf!',
          'berat.required' => 'Berat badan tidak boleh kosong!',
          'berat.numeric' => 'Berat badan hanya boleh angka!',
          'berat.digits_between' => 'Berat badan maksimal 3 digit!',
          'tinggi.required' => 'Tinggi badan tidak boleh kosong!',
          'tinggi.numeric' => 'Tinggi badan hanya boleh angka!',
          'tinggi.digits_between' => 'Tinggi badan maksimal 3 digit!',
          'alamat.required'=> 'Alamat tidak boleh kosong!',
          'alamat.max'=> 'Alamat maksimal 100 karakter',
          'agama.required' => 'Pilih salah satu agama!',
          'asal_sekolah.required' => 'Asal sekolah tidak boleh kosong!',
          'asal_sekolah.max' => 'Asal sekolah maksimal 40 karakter',
          'alamat_sekolah.required' => 'Alamat sekolah tidak boleh kosong!',
          'alamat_sekolah.max' => 'Alamat sekolah maksimal 100 karakter',
          'tahun.required'=> 'Pilih salah satu tahun!',
          'no_hp.required'=> 'Nomor hp tidak boleh kosong!',
          'no_hp.numeric'=> 'Nomor hp hanya boleh angka!',
          'no_hp.digits_between'=> 'Nomor hp maksimal 13 digit!',
          // Data ortu:
          'nama_ayah.required' => 'Nama ayah tidak boleh kosong!',
          'nama_ayah.max' => 'Nama ayah maksimal 40 karakter!',
          'nama_ayah.regex' => 'Nama ayah hanya boleh huruf!',
          'nama_ibu.required' => 'Nama ibu tidak boleh kosong!',
          'nama_ibu.max' => 'Nama ibu maksimal 40 karakter!',
          'nama_ibu.regex' => 'Nama ibu hanya boleh huruf!',
          'no_ortu.required'=> 'Nomor hp tidak boleh kosong!',
          'no_ortu.numeric'=> 'Nomor hp hanaya boleh angka!',
          'no_ortu.digits_between'=> 'Nomor hp maksimal 13 digit!',
          'pekerjaan_ayah.required' => 'Pilih salah satu pekerjaan!',
          'pekerjaan_ibu.required' => 'Pilih salah satu pekerjaan!',
          'alamat_ortu.required'=> 'Alamat tidak boleh kosong!',
          'alamat_ortu.max'=> 'Alamat tidak boleh kosong!',
          // 'lampiran'=> MyLib::LampiranBiodata($request),
          // Nilai:
          'n_ipa.required' => 'input nilai!',
          'n_ipa.numeric' => 'hanya boleh angka!',
          'n_ipa.max' => 'maks 100!',
          'n_math.required' => 'input nilai!',
          'n_math.numeric' => 'hanya boleh angka!',
          'n_math.max' => 'maks 100!',
          'n_bindo.required' => 'input nilai!',
          'n_bindo.numeric' => 'hanya boleh angka!',
          'n_bindo.max' => 'maks 100!',
          'n_bing.required' => 'input nilai!',
          'n_bing.numeric' => 'hanya boleh angka!',
          'n_bing.max' => 'maks 100!',
        ];
    }
}
