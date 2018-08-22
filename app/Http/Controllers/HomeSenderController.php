<?php

namespace App\Http\Controllers;

/**
 * Class HomeSenderController
 * @package App\Http\Controllers
 */
class HomeSenderController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homeSender.index', [
            'siteTitle'=>'Mooraway - поможет купить билет на самолёт недорого!',
            'siteDescription'=>'Ищите дешевый билет на самолёт? MooraWay поможет сэкономить до 50% от билета.',
            'siteKeywords'=>'билеты на самолёт недорого, доставка путешественниками'
        ]);
    }
}
