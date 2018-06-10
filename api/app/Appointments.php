<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
	public function patient()
	{
		return $this->belongsTo('App\Patients');
	}
	public function percription()
	{
		return $this->hasMany('App\Percription');
	}

    public function attachment()
    {
    	return $this->hasOne('App\FileStorage');
    }
}
