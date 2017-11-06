<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $fillable = ['periode_id', 'buka_pendaftaran', 'tampil_hasil_kelulusan'];
    public $timestamps  = false;

    public function Periode() {
        return $this->belongsTo('App\Periode');
    }
}
