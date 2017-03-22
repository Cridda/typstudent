<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offerte;

class OfferteController extends Controller
{
    /**
     * Store a new Offerte.
     * 
     * @param Request $request 
     * @return Something
     * 
     */
	public function store(Request $request)
	{
		$input = $request->all();
		$offerte = new Offerte();
		$offerte->name = $input->name;
		$offerte->save();
	}
}
