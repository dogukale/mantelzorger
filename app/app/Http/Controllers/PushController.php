<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\PushNotif;
use App\Models\User;
use Auth;
use Notification;

class PushController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
  
      /**
       * Store the PushSubscription.
       * 
       * @param \Illuminate\Http\Request $request
       * @return \Illuminate\Http\JsonResponse
       */
      public function store(Request $request){
          $this->validate($request,[
              'endpoint'    => 'required',
              'keys.auth'   => 'required',
              'keys.p256dh' => 'required'
          ]);
          $endpoint = $request->endpoint;
          $token = $request->keys['auth'];
          $key = $request->keys['p256dh'];
          $user = Auth::user();
          $user->updatePushSubscription($endpoint, $key, $token);
          
          return response()->json(['success' => true],200);
      }

      public function push(){
        Notification::send(User::all(),new PushNotif);
        return redirect()->back();
    }
}
