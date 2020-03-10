<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardCategory extends Model
{
    //

    public function templates(){
        return $this->hasMany(CardTemplate::class,'category_id');
    }
    
    protected $fillable= [
        'name', 'description'
    ];

    public function complementary_cards(){
        return $this->hasMany(ComplementaryCard::class);
    }
}
