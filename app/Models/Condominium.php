<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condominium extends Model
{
    protected $table = 'condominia';

    protected $fillable = [
        'name'
    ];

    public function contracts()
    {
        return $this->hasMany(Contracts::class);
    }
}
