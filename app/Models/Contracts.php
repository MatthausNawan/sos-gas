<?php

namespace App\Models;

use App\Helpers\Util;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'condominium_id',
        'document',
        'register',
        'birth_date',
        'phone',
        'mobile_phone',
        'email',
        'zipcode',
        'address',
        'address_number',
        'neighborhood',
        'city',
        'state',
    ];

    public function condominium()
    {
        return $this->belongsTo(Condominium::class, 'condominium_id');
    }

    public function getPersonAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function setDocumentAttribute($value)
    {
        $document = Util::sanitizeString($value);
        $this->attributes['document'] = $document;
    }

    public function setRegisterAttribute($value)
    {
        $register = Util::sanitizeString($value);
        $this->attributes['register'] = $register;
    }

    public function setPhoneAttribute($value)
    {
        $phone = Util::sanitizeString($value);
        $this->attributes['phone'] = $phone;
    }
    public function setMobilePhoneAttribute($value)
    {
        $mobile_phone = Util::sanitizeString($value);
        $this->attributes['mobile_phone'] = $mobile_phone;
    }

    public function setZipCodeAttribute($value)
    {
        $zipcode = Util::sanitizeString($value);
        $this->attributes['zipcode'] = $zipcode;
    }

    public function setBirthDateAttribute($value)
    {
        $splited = explode('/', $value);

        $date =  Carbon::parse($splited[2], $splited[1], $splited[0]);

        $this->attributes['birth_date'] = $date;
    }
}
