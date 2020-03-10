<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComplementaryCard;
use App\CardTemplate;
use App\CardCategory;
use App\User;


class ComplementaryCardController extends Controller
{
    //

    public function __construct(){
        $this->midddleware('Auth');
    }

    public function index(){
        return ComplementaryCard::all();
    }

    public function create(){
        return view('comp_cards.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'string',
            'description'=>''
        ]);
        $comp_card = new ComplementaryCard;
        $comp_card->user_id = Auth::user()->id;
        $comp_card->user_id = $request->user_id;
        $comp_card->category_id = $request->category_id;
        $comp_card_url = $request->file('comp_card')->store('images','public');
        $comp_card->comp_card_url = $comp_card_url;


        return $comp_card->save();
    }

    public function destroy($id){
        $comp_card= user()->complementaryCard::findOrFail($id);
        if($comp_card){ComplementaryCard::delete($id);
        }
    }

    public function recieved(){
        return;

    }
}
