<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    use HasFactory;

    protected $fillable = ['pairtype_id', 'name', 'base', 'symbol'];

    public function pairtype()
    {
        return $this->belongsTo(Pairtype::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['pair'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('id', '=', $search);
            });
        });
        // $this->fetchPrice($query);
    }

    public function fetchPrice($query)
    {
        dd($query->toSql());
    }
}
