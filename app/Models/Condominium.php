<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Condominium extends Model
{
    use SoftDeletes;

    public $table = 'condominia';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
