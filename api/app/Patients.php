<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
	protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'cnic',
        'country',
        'state',
        'city',
        'address1',
        'address2',
        'phoneNo',
        'cellNo',
        'dateOfBirth'
    ];

    public function appointments()
    {
    	return $this->hasMany('App\Appointments');
    }
}
