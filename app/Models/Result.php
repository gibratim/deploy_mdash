<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $table = 'result';

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
