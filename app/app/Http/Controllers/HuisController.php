<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Huis;
use App\Models\Sensor;
use App\Models\Temperatuur;
use App\Models\Vochtigheid;
use App\Models\Beveiliging;
use App\Models\Knop;
use Auth;
use DB;

class HuisController extends Controller
{
    public function index() {
        $user = Auth::user()->id;
        return view('dashboard',[
            'huis' => Huis::all()->where('mantelzorger', '==', $user),
            'user' => Auth::user(),
        ]);
    }

    public function show($id) {
        $allSensors = DB::table('paniek_knop')->join('sensors', 'paniek_knop.id', '=', 'sensors.sensor_id')->get();
        $paniek = $allSensors->where('id', '==', 1)->where('sensor_id', '==', 1);
        $water = $allSensors->where('id', '==', 2)->where('sensor_id', '==', 2);
        $gas = $allSensors->where('id', '==', 3)->where('sensor_id', '==', 3);
        
        return view('huizen.show',[
            'huis' => Huis::find($id),
            'sensor' => Sensor::all()->first(),
            'paniek' => $paniek,
            'water' => $water,
            'gas' => $gas,
            'temperatuur' => Temperatuur::all()->where('huis_id', '==', $id),
            'vochtigheid' => Vochtigheid::all()->where('huis_id', '==', $id),
            'beveiliging' => Beveiliging::all()->where('huis_id', '==', $id),
        ]);
    }
}