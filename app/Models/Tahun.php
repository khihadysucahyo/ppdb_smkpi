<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    protected $guarded = ['id','tahun'];
    public function Profile()
    {
        $this->hasMany('App\Models\Profile');
    }
}
