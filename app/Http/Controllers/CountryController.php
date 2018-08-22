<?php

namespace App\Http\Controllers;

use App\Countries;
use Illuminate\Support\Facades\Input;

/**
 * Class CountryController
 * @package App\Http\Controllers
 */
class CountryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = Countries::getCountryFromTerm(Input::get('term'));

        return response()->json($cities);
    }
}
