<?php

namespace App\Http\Controllers;

use App\CalorieCheckIn;
use Illuminate\Http\Request;

class CalorieCheckInController extends Controller
{
    /**
     * Persist a calorie check-in to the database.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $checkInData = request()->validate([
            'calories' => ['required', 'min:0']
        ]);

        auth()->user()->calorieCheckIns()->create($checkInData);

        return redirect('checkin');
    }
}
