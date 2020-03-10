<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardCategory;

class CardCategoryController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return CardCategory::all();
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'string',
            'description'=>''
        ]);
        CardCategory::create($request->all());
    }

    public function destroy($id){
        $cardCategory= CardCategory::findOrFail($id);
        if($cardCategory){
            CardCategory::delete($id);
        }
    }
}
