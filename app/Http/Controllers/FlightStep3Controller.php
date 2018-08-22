<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Http\Requests\FlightStep1Request;
use App\Http\Requests\FlightStep2Request;
use App\Http\Requests\FlightStep3Request;
use App\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class FlightStep3Controller
 * @package App\Http\Controllers
 */
class FlightStep3Controller extends Controller
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

        return view('flightStep3.index', [
            'cityFrom' => $cityFrom,
            'cityTo' => $cityTo,
            'siteTitle'=>'Создание перелёта - Шаг 3',
        ]);
    }

    /**
     * @param FlightStep2Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FlightStep3Request $request)
    {
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->route('flightStep4:index', [
            'fromId' => (int)$request->input('fromId'),
            'toId' => (int)$request->input('toId')
        ]);
    }
}
