<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pairtype extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function pair()
    {
        return $this->hasMany(Pair::class);
    }
}
