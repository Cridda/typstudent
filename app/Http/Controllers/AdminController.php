<?php

namespace App\Http\Controllers;

use App\Offerte;
use Illuminate\Http\Request;
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
		$offerte = Offerte::find($id);
		return view('offertes.offerte', compact('offerte'));
	}
	public function editOfferte($id, Request $request)
	{
		$offerte = Offerte::find($id);
		$offerte->name = request('name');
		$offerte->email = request('email');
		$offerte->telephone = request('phone');
		$offerte->kind = request('soort');
		$offerte->subject = request('onderwerp');
		$offerte->minutes = request('minuten');
		$offerte->comments = request('opmerkingen');
		$offerte->status = request('status');
		$offerte->save();
		return redirect('/offertes/'.$offerte->id);
	}
	
}
