<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $fillable = ['tahun_ajaran', 'buka_pendaftaran', 'tampil_hasil_kelulusan'];
    public $timestamps  = false;

    public function Tahun_Ajaran() {
        return $this->belongsTo('App\Tahun_Ajaran');
    }
}
