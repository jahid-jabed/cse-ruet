<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmitCard extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
		//One to Many
    }
}
