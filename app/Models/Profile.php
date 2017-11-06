<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded  = 'no_pendaftaran';

    public function User() {
        return $this->belongsTo('App\User');
    }

    public function Tahun(){
        return $this->belongsTo('App\Models\Tahun');
    }

    public function Periode(){
        return $this->belongsTo('App\Models\Periode', 'Periode', 'id');
    }

    public function Pekerjaan(){
        return $this->belongsTo('App\Models\Pekerjaan');
    }
}
