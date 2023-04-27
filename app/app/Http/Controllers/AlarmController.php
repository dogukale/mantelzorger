<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlarmController extends Controller
{
    public function getAlarmen(){
        $huizen = \App\Models\Huis::all();
        $temp = true;
        foreach($huizen as $huis) {
            info($huis->alarm);
            if ($huis->alarm == "true"){
                $temp = false;
                return "{$huis->name}";
            }
        }

        if ($temp){
            return "Geen Alarmen Huis";
        }
    }
}
