<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SendCard;
use Auth;
use DB;

class SendCardController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function sent(){
        return Auth::user()->sendCard()->latest();
    }

    public function received(){
       $received_cards = DB::table('send_cards')->select('*')->where('receiver_email', '=', Auth::user()->email)->latest();

       return view('cards.received', compact($received_cards));
    }
}
