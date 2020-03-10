<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplementaryCard extends Model
{
    //

    protected $fillable= [
        'comp_card_url', 'category_id'
    ];
 
    public function user(){
        return $this->belongsTo(User::class);
    }
 
    public function category(){
        return $this->belongsTo(cardCategory::class, 'category_id');
    }
}
