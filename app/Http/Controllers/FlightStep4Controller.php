<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Http\Requests\FlightStep3Request;
use App\Http\Requests\FlightStep4Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

/**
 * Class FlightStep4Controller
 * @package App\Http\Controllers
 */
class FlightStep4Controller extends Controller
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

        return view('flightStep4.index', [
            'cityFrom' => $cityFrom,
            'cityTo' => $cityTo,
            'siteTitle'=>'Создание перелёта - Шаг 4',
        ]);
    }

    /**
     * @param FlightStep3Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FlightStep4Request $request)
    {
        $user = Auth::user();
        $user->password = bcrypt($request->input('password'));


        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/uploads/', $imageName);
            Image::make(public_path() . '/uploads/' . $imageName)
                ->fit(250)
                ->save();
            $user->avatar = $imageName;
        }

        $user->save();

        return redirect()->route('flightStep5:index', [
            'fromId' => (int)$request->input('fromId'),
            'toId' => (int)$request->input('toId')
        ]);
    }
}
