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
        $car_names = $this->getAllCarNames();
        $car_names_viewed = $this->getAllViewedCars($car_names);

        return view('home', ['car_names' => $car_names, 'viewed_cars'=>$car_names_viewed]);
    }

    public function allCars() {
        $all_cars = $this->getAllCarNames();

        return view('pages.all_cars', ['all_cars' => $all_cars] );
    }

    public function getAllCarNames() {
        return $car_names = CarNames::all();
    }

    public function getAllViewedCars($cars) {
        if( isset($cars) && $cars->count() > 0 ) {
                return $cars->whereNotIn('viewed', 0);
        }

        return false;
    }
}
