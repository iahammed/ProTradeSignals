<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;
    
    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }

    public function organizations()
    {
        return $this->hasMany(Organization::class);
    }

    // public function contacts()
    // {
    //     return $this->hasMany(Contact::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
