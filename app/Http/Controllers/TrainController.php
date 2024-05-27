<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function todaysTrain(){
        $trains = Train::whiere('departure_datetime', '>=', today())->get();
       
        return view ('todays-Trains', compact('trains'));
    }
}
