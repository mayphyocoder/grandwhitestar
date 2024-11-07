<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(Country::class, 'countrie_id', 'id');
    }
}
