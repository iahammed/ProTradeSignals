<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'message_at',
        'pair',
        'pair_id',
        'price',
        'tp',
        'sl',
        'user_id',
        'position'
    ];
}
