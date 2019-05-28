<?php

namespace Tests\Unit;

use Carbon\Carbon;
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

    /** @test */
    public function a_user_has_a_tdee()
    {
        $user = factory('App\User')->create([
            'weight' => 50,
            'height' => 150,
            'gender' => 'm',
            'dob' => '2000-01-01'
        ]);

        $expectedTDEE =
            10.0 * $user['weight'] +
            6.25 * $user['height'] -
            5.0 * Carbon::parse($user['dob'])->age + 5;
        $actualTDEE = $user->tdee();

        $this->assertEquals($expectedTDEE, $actualTDEE);
    }
}
