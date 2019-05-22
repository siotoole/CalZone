<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WeightCheckIn;

/**
 * Class WeightCheckInController
 * @package App\Http\Controllers
 */
class WeightCheckInController extends Controller
{
    /**
     * Allow a user to view their weight progress.
     *
     * @return mixed
     */
    public function index()
    {
        $weightProgress = auth()->user()->weightCheckIns;

        return view('progress/weight')->withWeightProgress($weightProgress);
    }

    /**
     * Persist a weight check-in to the database.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $checkInData = request()->validate([
            'weight' => ['required', 'min:0']
        ]);

        auth()->user()->weightCheckIns()->create($checkInData);

        return redirect('progress/weight');
    }
}
