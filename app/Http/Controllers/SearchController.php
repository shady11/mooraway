<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Flight;
use Illuminate\Http\Request;

/**
 * Class SearchController
 * @package App\Http\Controllers
 */
class SearchController extends Controller
{
    /**
     * @param $fromId
     * @param $toId
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($fromId, $toId, $id = false)
    {
        $flights = Flight::findAllByCity($fromId, $toId, 0);
        $cityFrom = Cities::findOrFail((int)$fromId);
        $cityTo = Cities::findOrFail((int)$toId);

        $count = count($flights);

        return view('search.index', [
            'cityFrom' => $cityFrom,
            'cityTo' => $cityTo,
            'flights' => $flights,
            'fromId' => $fromId,
            'toId' => $toId,
            'count' => $count,
            'id' => $id,
            'siteTitle' => $count ? 'Отправить посылку (' . $cityFrom->name . ' - ' . $cityTo->name . ')' : 'Не найдены отправители!',
        ]);
    }

    /**
     * @param $fromId
     * @param $toId
     * @param $offset
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    public function ajax($fromId, $toId, $offset)
    {
        $flights = Flight::findAllByCity($fromId, $toId, $offset);

        return $flights;
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id)
    {
        $flight = Flight::findOneById($id);

        if (!$flight) {
            abort(404);
        }

        return view('search.view', [
            'flight' => $flight,
            'siteTitle' => 'Карточка отправителя'
        ]);
    }
}
