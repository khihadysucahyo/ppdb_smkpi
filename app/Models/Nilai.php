<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public function Profile()
    {
        return $this->hasOne('App\Models\User');
    }
}
