<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyPartialsController extends Controller
{
    public function buyPartials() {

        return view('pages.buy_partials');
    }
}
