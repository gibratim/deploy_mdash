<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Angle extends Model
{
    //
    use SoftDeletes;
    protected $table = 'angle';

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public static function rules($id = 0, $merge = [])
    {
        return array_merge(
            [
                'name'   => 'required|unique:angle,angle'.($id ? ",$id" : ''),
            ],
            $merge);
    }

    public function test()
    {
        return $this->hasMany('App\Models\Test');
    }
}
