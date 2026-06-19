<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $works = config('portfolio.works');
        $visibleWorks = array_slice($works, 0, 5);

        return view('home', [
            'works' => $visibleWorks,
            'totalWorks' => count($works),
        ]);
    }

    public function work()
    {
        return view('work', [
            'works' => config('portfolio.works'),
        ]);
    }

    public function map()
    {
        return view('map');
    }
}