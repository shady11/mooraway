<?php

namespace App\Http\Controllers;


use App\Flight;
use Illuminate\Support\Facades\Input;

/**
 * Class AdminController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $flights = Flight::search(
            Input::get('flightAt'),
            Input::get('countryId')
        );

        return view('admin.index', ['flights' => $flights]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $flight = Flight::findOneById($id);
        if ($flight) {
            $flight->delete();
        }

        return redirect()->back();
    }
}
