<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Creditcard;
use App\User;

class BaseController extends Controller
{
    protected $banks;

    protected $model;

    protected $card;


    public function __construct(User $model, Creditcard $card, $bnaks)
    {
    	$this->model() = $model;

    	$this->card() = $card;

    	$banks = [];
    }


    public function validateCard($banks)
    {
    	$banks = "531169";
    	//come up with a function to insert this bank bin no
    	//to reduce the restriction to a single generation
    	//return attach-.to string

    	$this->card()->while ( $banks<= 1000) {
    		# code...
    		array_chunk($bank, 6);

    		return new $card
    	} else{
    		return "The Number Provided is Invalid";
    	}
    }
}
