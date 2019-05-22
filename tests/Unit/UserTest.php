<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_has_weight_check_ins()
    {
        $user = factory('App\User')->create();

        $this->assertInstanceOf(Collection::class, $user->weightCheckIns);
    }

    /** @test */
    public function a_user_has_calorie_check_ins()
    {
        $user = factory('App\User')->create();

        $this->assertInstanceOf(Collection::class, $user->calorieCheckIns);
    }
}
