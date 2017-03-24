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
		$offerte = new Offerte();
		$offerte->name = request('name');
		$offerte->email = request('email');
		$offerte->telephone = request('phone');
		$offerte->kind = request('soort');
		$offerte->subject = request('onderwerp');
		$offerte->minutes = request('minuten');
		$offerte->comments = request('opmerkingen');
		$offerte->status = 0;
		$offerte->save();
		return view('succes');
	}

}
