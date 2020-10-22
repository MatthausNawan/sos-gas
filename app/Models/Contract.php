<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Contract extends Model
{
    use SoftDeletes, Notifiable;

    public $table = 'contracts';

    protected $dates = [
        'birth_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'condominium_id',
        'first_name',
        'last_name',
        'ssn',
        'register',
        'birth_date',
        'phone',
        'mobile_phone',
        'email',
        'zipcode',
        'address_1',
        'address_number',
        'province',
        'city',
        'state',
        'address_complement',
        'hash',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function condominium()
    {
        return $this->belongsTo(Condominium::class, 'condominium_id');
    }

    public function getBirthDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
