<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knop;

class KnopController extends Controller
{
    public function aanuit($id,  $boolean = null){
        $knop = \App\Models\Knop::find($id);

        if (is_null($boolean)){
            if ($knop->btn_pressed == 'false'){
                $knop->btn_pressed = 'true';
            }
            else {
                $knop->btn_pressed = 'false';
            }
        } elseif ($boolean == "true") {
            $knop->btn_pressed = 'true';
        } else {
            $knop->btn_pressed = 'false';
        }
        $knop->save();
        return redirect('/');
    }
}
