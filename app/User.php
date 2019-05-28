<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'weight', 'height', 'gender', 'dob', 'goal_weight', 'weekly_goal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Define a relationship between users and weight check-ins.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function weightCheckIns()
    {
        return $this->hasMany(WeightCheckIn::class);
    }

    /**
     * Define a relationship between users and calorie check-ins.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calorieCheckIns()
    {
        return $this->hasMany(CalorieCheckIn::class);
    }

    /**
     * Calculate a user's Total Daily Energy Expenditure (TDEE) using the Mifflin St Jeor equation.
     *
     * @return int
     */
    public function tdee()
    {
        return $this->weight * 10.0 +
            $this->height * 6.25 -
            Carbon::parse($this->dob)->age * 5.0 +
            (($this->gender === 'f') ? -161 : 5);
    }
}
