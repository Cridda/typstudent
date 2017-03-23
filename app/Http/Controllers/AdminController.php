<?php

namespace App\Http\Controllers;

use App\Offerte;
class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	public function adminDashboard()
	{
		$offertesCount = Offerte::all()->where('status', '0')->count();
		return view('admin.dashboard', ['offertesCount' => $offertesCount]);
	}
	
	public function allOffertes()
	{
		$offertes = Offerte::orderBy('created_at', 'desc')->paginate(8);
		return view('offertes.all', compact('offertes'));
	}
	public function setOfferteDone($id)
	{
		Offerte::where('id', $id)->update(['status' => 2]);
		return redirect('/offertes');
	}
	public function showOfferte($id)
	{
		$offerte = Offerte::where('id', $id);
		return view('offertes.offerte', compact('offerte'));
	}
}
