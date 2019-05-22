<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageCalorieCheckInsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_check_in_a_calorie_count()
    {
        $this->withoutExceptionHandling();

        $data = [
            'calories' => rand(1000, 2000)
        ];

        $this->post('/checkin/calories', $data)->assertRedirect('/checkin');

        $this->assertDatabaseHas('calorie_check_ins', $data);
    }
}
