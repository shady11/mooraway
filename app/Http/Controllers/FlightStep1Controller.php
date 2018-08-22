<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Http\Requests\FlightStep1Request;
use App\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class FlightStep1Controller
 * @package App\Http\Controllers
 */
class FlightStep1Controller extends Controller
{
    /**
     * @param $fromId
     * @param $toId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($fromId, $toId)
    {
        $cityFrom = Cities::findOrFail((int)$fromId);
        $cityTo = Cities::findOrFail((int)$toId);

        return view('flightStep1.index', [
            'cityFrom' => $cityFrom,
            'cityTo' => $cityTo,
            'siteTitle'=>'Создание перелёта - Шаг 1',
        ]);
    }

    /**
     * @param FlightStep1Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FlightStep1Request $request)
    {
        if (!Auth::check()) {
            $password = bcrypt('secret');
            $attributes = $request->all();
            $attributes['password'] = $password;
            $attributes['group'] = 'carrier';
            $user = User::create((array)$attributes);
        } else {
            $user = Auth::user();
        }

        $user
            ->flight()
            ->create([
                'fromId' => (int)$request->input('fromId'),
                'toId' => (int)$request->input('toId'),
                'flightAt' => (new \DateTime($request->input('flightAt')))->format('Y-m-d ' . $request->input('flightTimeAt'))
            ]);

        if (Auth::check()) {
            return redirect()->route('carrierCabinet:index');
        }

        Auth::login($user);

        return redirect()->route('flightStep2:index', [
            'fromId' => (int)$request->input('fromId'),
            'toId' => (int)$request->input('toId')
        ]);
    }
}
