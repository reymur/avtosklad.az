<?php

namespace App\Http\Controllers;

use App\Models\CarNames;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $car_names = $this->getCarNames();

        return view('home', ['car_names' => $car_names]);
    }

    public function getCarNames() {
        return $car_names = CarNames::all();
    }
}
