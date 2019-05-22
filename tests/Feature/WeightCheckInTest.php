<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class WeightCheckInTest
 * @package Tests\Feature
 */
class WeightCheckInTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_cannot_check_in_a_weight()
    {
        $data = factory('App\WeightCheckIn')->raw();

        $this->post('checkin/weight', $data)->assertRedirect('login');
    }

    /** @test */
    public function guests_cannot_view_weight_progress()
    {
        $this->get('/progress/weight')->assertRedirect('login');
    }

    /** @test */
    public function a_user_can_check_in_a_weight()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory('App\User')->create());
        $data = [
            'weight' => rand(600, 1600) / 10    // Generate a random decimal between 60.0 and 160.0.
        ];

        $this->post('/checkin/weight', $data)->assertRedirect('/progress/weight');

        $this->assertDatabaseHas('weight_check_ins', $data);
    }

    /** @test */
    public function a_weight_check_in_requires_a_weight()
    {
        $this->actingAs(factory('App\User')->create());

        $data = factory('App\WeightCheckIn')->raw(['weight' => null]);

        $this->post('/checkin/weight', $data)->assertSessionHasErrors('weight');
    }

    /** @test */
    public function a_user_can_view_their_weight_progress()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory('App\User')->create());
        $data = [
            'weight' => rand(600, 1600) / 10    // Generate a random decimal between 60.0 and 160.0.
        ];

        $this->post('/checkin/weight', $data);

        $this->get('/progress/weight')->assertSee($data['weight']);
    }
}
