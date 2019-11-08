<?php

namespace App\Http\Controllers;
use App\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function store(Request $request){
    	$data = new Saran();
    	$data->firstname = $request->input('firstname');
    	$data->lastname = $request->input('lastname');
    	$data->email = $request->input('email');
    	$data->phone = $request->input('phone');
    	$data->message = $request->input('message');
    	$data->save();
    	return redirect('/saran');
    }
	
	public function show(){
		$data = Saran::all();
		return view('saran.show')->with('data',$data);
    }
    
    public function create(){
		return view('saran.create');
    }

	
}
