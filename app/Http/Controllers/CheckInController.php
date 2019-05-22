<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckInController extends Controller
{
    /**
     * Present the user with weight and calories check-in forms.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('checkin');
    }
}
