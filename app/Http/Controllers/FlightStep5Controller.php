<?php

namespace App\Http\Controllers;

use App\Cities;
use Illuminate\Support\Facades\Auth;

/**
 * Class FlightStep5Controller
 * @package App\Http\Controllers
 */
class FlightStep5Controller extends Controller
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
        $user = Auth::user();

        return view('flightStep5.index', [
            'cityFrom' => $cityFrom,
            'cityTo' => $cityTo,
            'user' => $user,
            'siteTitle'=>'Создание перелёта - Шаг 5',
        ]);
    }

    public function noPhoto()
    {
        $user = Auth::user();
        $user->avatar = '';
        $user->save();

        return redirect()->route('carrierCabinet:index');
    }
}
