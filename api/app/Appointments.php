<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
	public function percription()
	{
		return $this->hasOne('App\Percription');
	}
	
    public function attachment()
    {
    	return $this->hasOne('App\FileStorage');
    }
}
