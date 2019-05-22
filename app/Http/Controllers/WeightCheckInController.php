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
     * Persist a weight check-in to the database.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $checkInData = request()->validate([
            'weight' => 'required'
        ]);

        auth()->user()->weightCheckIns()->create($checkInData);

        return redirect('/progress/weight');
    }
}
