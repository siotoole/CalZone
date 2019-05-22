<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WeightCheckIn
 * @package App
 */
class WeightCheckIn extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'weight'
    ];
}
