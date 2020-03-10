<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardTemplate;
use App\CardCategory;
use Anam\PhantomMagick\Converter;

class CardTemplateController extends Controller
{
    //

    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        $card_templates= CardTemplate::all();
        return view('templates.index', compact('card_templates'));
    }

    public function cateTemplates($category_id){
        $card_templates= CardCategory::findOrFail($category_id)->load('templates');
        return (compact('card_templates'));//view('templates.index')->with('card_templates');
        //asset('storage/templates/'.{$path})
    }
    

    public function create(){
        return view('templates.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|string|unique:App\CardTemplate,name',
            'description'=>'string',
            'category_id'=>'required|integer',
            'template_file'=>'required|file|mimes:html'
        ]);
        if($request->hasFile('template_file')){
            $conv = new Converter;
            //$target_path    =   public_path('/Templates/');
            $template_path = $request->file('template_file')->store('Templates','public');
            $options = [
                'width' => 350,
                'quality' => 90,
                'height' => '200'
              ];
            $conv->source("{{asset('storage/'. $template_path)}}")
                ->tojpg($options)->landscape()
                ->save('/Images/');
                // save file name in the database
            

            $cardTemplate = new CardTemplate;
            $cardTemplate->template_url = $template_path;
            $cardTemplate->name = $request->name;
            $cardTemplate->description = $request->description;
            $cardTemplate->category_id = $request->category_id;
            
            // $template_file = $request->file('template_file');
            // $template_file->move(public_path(). '/templates/', 
            // $template_file->getClientOriginalName());
            // //$url = URL::to
        }
        if($cardTemplate->save()){
            return redirect()->back()->with('templateSuccess', 'Template has been created successfully!');
        }
        else{
            return redirect()->back()->withErrors($Error)->withInput();
        }
        
    }

    public function destroy($id){
        $cardTemplate= CardTemplate::findOrFail($id);
        if($cardTemplate){
            CardTemplate::delete($id);
        }
    }
}
