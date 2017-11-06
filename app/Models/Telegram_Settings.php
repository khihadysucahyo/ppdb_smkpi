<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telegram_Settings extends Model
{
    protected $guarded = ['id'];
    protected $table = 'telegram_settings';
    public $timestamps = false;
}
