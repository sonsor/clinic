<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
	public function percription()
	{
		return $this->hasMany('App\Percription');
	}

    public function attachment()
    {
    	return $this->hasOne('App\FileStorage');
    }
}
