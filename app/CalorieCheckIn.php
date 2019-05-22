<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CalorieCheckIn
 * @package App
 */
class CalorieCheckIn extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calories'
    ];
}
