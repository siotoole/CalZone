<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class ManageUsersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_new_user_can_register()
    {
        //$this->withoutExceptionHandling();

        $user = factory('App\User')->raw([
            'password' => 'passwordtest',
            'password_confirmation' => 'passwordtest'
        ]);

        $this->post(route('register'), $user)->assertRedirect('/home');

        $this->assertDatabaseHas('users', [
            'name' => $user['name'],
            'email' => $user['email'],
            'weight' => $user['weight'],
            'height' => $user['height'],
            'gender' => $user['gender'],
            'dob' => $user['dob'],
            'goal_weight' => $user['goalWeight'],
            'weekly_goal' => $user['weeklyGoal']
        ]);
    }
}
