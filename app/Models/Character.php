<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = ['id', 'name', 'real_name', 'gender', 'universe_id'];

    // Esta es la relación de regreso:
    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }
}