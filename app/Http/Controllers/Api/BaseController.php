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
    	$banks = "5311694";

    	$this->card()->while ( $banks<= 10) {
    		# code...
    		array_chunk($bank, 7);

    		return new $card
    	} else{
    		return "The Number Provided is Invalid";
    	}
    }
}
