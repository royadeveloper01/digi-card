<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\complementaryCard;
use App\User;

class SendCard extends Model
{
    //
    protected $fillable = ['card_url', 'receiver_email'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    

}
