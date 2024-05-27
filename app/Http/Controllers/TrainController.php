<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function todaysTrain(){
        $trains = Train::all();
        dd($trains);
        return view ('todays-Trains');
    }
}
