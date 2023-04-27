<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GasController extends Controller
{
    public function aanuit(){
        $led = \App\Models\Led::all()->first();

        if ($led->led_on == 'uit'){
            $led->led_on = 'aan';
        }
        else {
            $led->led_on = 'uit';
        }
        $led->save();
        return redirect('/');
    }
}
