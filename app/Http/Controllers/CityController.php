<?php

namespace App\Http\Controllers;

use App\Cities;
use Illuminate\Support\Facades\Input;

/**
 * Class HomeSenderController
 * @package App\Http\Controllers
 */
class CityController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = Cities::getCityFromTerm(Input::get('term'));

        return response()->json($cities);
    }
}
