<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    protected $table = 'test';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Fillable fields for a Test.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'result_id',
        'test_type',
        'angle_id',
        'value',
    ];

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    public function result()
    {
        return $this->belongsTo('App\Models\Result');
    }

    public function angle()
    {
        return $this->belongsTo('App\Models\Angle');
    }
}
