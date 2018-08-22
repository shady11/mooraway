<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Http\Requests\FlightCreateRequest;
use App\Http\Requests\FlightUpdateStatusRequest;
use DateTime;
use Illuminate\Support\Facades\Auth;

/**
 * Class FlightController
 * @package App\Http\Controllers
 */
class FlightController extends Controller
{
    /**
     * @param $id
     */
    public function delete($id)
    {
        $model = Flight::findOneOwnerById($id);
        $model->delete();
    }

    /**
     * @param $id
     * @param FlightUpdateStatusRequest $request
     */
    public function updateStatus($id, FlightUpdateStatusRequest $request)
    {
        $model = Flight::findOneOwnerById($id);
        $model->status = $request->input('status');

        $model->save();
    }

    /**
     * @param FlightCreateRequest $request
     */
    public function createAjax(FlightCreateRequest $request)
    {
        $flightAt = (new DateTime($request->input('flightAt') . ' ' . $request->input('timeAt')))->format('Y-m-d H:m:i');
        $model = new Flight();
        $model->fromId = (int)$request->input('fromId');
        $model->toId = (int)$request->input('toId');
        $model->flightAt = $flightAt;
        $model->userId = Auth::user()->id;
        $model->save();
    }
}
