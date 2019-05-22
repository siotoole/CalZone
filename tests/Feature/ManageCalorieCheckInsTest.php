<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageCalorieCheckInsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_cannot_check_in_a_calorie_count()
    {
        $data = factory('App\CalorieCheckIn')->raw();

        $this->post('/checkin/calories', $data)->assertRedirect('login');
    }

    /** @test */
    public function a_user_can_check_in_a_calorie_count()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory('App\User')->create());

        $data = [
            'calories' => rand(1000, 2000)
        ];

        $this->post('/checkin/calories', $data)->assertRedirect('/checkin');

        $this->assertDatabaseHas('calorie_check_ins', $data);
    }

    /** @test */
    public function a_calorie_check_in_requires_a_calorie_count()
    {
        $this->actingAs(factory('App\User')->create());
        $data = factory('App\CalorieCheckIn')->raw(['calories' => null]);

        $this->post('/checkin/calories', $data)->assertSessionHasErrors('calories');
    }
}
