<?php

namespace App\Http\Controllers;

use App\MyUser;
use Illuminate\Http\Request;

class MyuserController extends Controller
{
    public function store(Request $request){
    	$data = new MyUser();
    	$data->name = $request->input('name');
    	$data->email = $request->input('email');
    	$data->birthdate = $request->input('birthdate');
    	$data->password = bcrypt($request->input('password'));
    	$data->save();
    	return redirect('/index/show');
    }
	
	public function show(){
		$data = MyUser::all();
		return view('users.show')->with('data',$data);
    }
	public function delete($id){
		$data = MyUser::find($id);
		$data->delete();
		return redirect('/index/show');
    }


}
