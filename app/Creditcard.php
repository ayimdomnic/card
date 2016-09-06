<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditcard extends Model
{

    public function __construct(Error $e)
    {
        $e = "Please Provide a valid card ref";
    }

    protected $fillable = [
        'user_id',
        'number',
        'text',
        'data_crypt',
        'note',
        'password',
        'cvv',
        'valid',
    ];

    //every user has a card
    //a user can have many cards
    //a caard can only belong to one user
    public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function getValidatedAttribute($cvv)
    {
        $card = Input::getallheaders($cvv)

        if (!isset($cvv)) {
            # code...
            foreach ($cvv as $key => $value) {
                # code...
                return $cvv

            }
        }else{
            return $e;
        }
    }
}
