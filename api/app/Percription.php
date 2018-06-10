
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Percription extends Model
{
	public function appointment()
	{
		return $this->belongsTo('App\Appointments');
	}
}
