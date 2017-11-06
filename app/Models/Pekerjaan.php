<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    public function Profile()
    {
        return $this->hasMany('App\Models\Profile');
    }
}
