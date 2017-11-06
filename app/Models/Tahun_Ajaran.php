<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tahun_Ajaran extends Model
{
    protected $guarded = ['id','tahun'];
    protected $table = 'tahun_ajaran';
    public $timestamps = false;

    public function Profile()
    {
        $this->hasMany('App\Models\Profile');
    }

    public function Pengaturan()
    {
        return $this->hasOne('App\Models\Pengaturan');
    }
}
