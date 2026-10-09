<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EntryRequest; // Імпорт реквесту
use App\Http\Requests\LandingRequest;

class SiteController extends Controller
{
    // Метод з Case 0 / Case 1
    public function say(string $message = 'Привіт')
    {
        return view('site.say', ['message' => $message]);
    }

    // Методи з Case 3
    public function entry()
    {
        return view('site.entry');
    }

    public function entryStore(EntryRequest $request)
    {
        return view('site.entry-confirm', $request->validated());
    }

    // Методи для Landing
    public function landing()
    {
        return view('site.landing');
    }

    public function landingStore(LandingRequest $request)
    {
        return view('site.landing-confirm', $request->validated());
    }
}
