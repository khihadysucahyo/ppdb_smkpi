<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{   
    protected $guarded = ['id'];
    protected $table = 'periode';
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
