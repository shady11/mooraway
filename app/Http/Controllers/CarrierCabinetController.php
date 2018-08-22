<?php

namespace App\Http\Controllers;

use App\Flight;

class CarrierCabinetController extends Controller
{
    protected $loginPath = '/'; // <--- note this

    public function index()
    {
        $flights = Flight::findAll();

        return view('carrierCabinet.index', [
            'flights' => $flights,
            'siteTitle'=>'Личный кабинет - поиск посылки!',
        ]);
    }
}
