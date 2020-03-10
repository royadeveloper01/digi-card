<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardTemplate extends Model
{
    //

    public function categories(){
        return $this->belongsTo(CardCategory::class);
    }
    
    protected $fillable= [
        'name', 'description', 'template_url', 'category_id'
    ];
}
