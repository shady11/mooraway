<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Http\Requests\FlightStep0Request;
use App\Http\Requests\FlightStep1Request;
use App\Http\Requests\FlightStep2Request;
use App\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class FlightStep0Controller
 * @package App\Http\Controllers
 */
class FlightStep2Controller extends Controller
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

        return view('flightStep2.index', [
            'cityFrom' => $cityFrom,
            'cityTo' => $cityTo,
            'siteTitle'=>'Создание перелёта - Шаг 2',
        ]);
    }

    /**
     * @param FlightStep2Request $request
     */
    public function store(FlightStep2Request $request)
    {
//        exit;
        $user = Auth::user();
        $user->type = $request->input('type');
        $user->save();

        return redirect()->route('flightStep3:index', [
            'fromId' => (int)$request->input('fromId'),
            'toId' => (int)$request->input('toId')
        ]);
    }
}
