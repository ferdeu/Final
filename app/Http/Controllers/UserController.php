<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class UserController extends Controller
{
  public function index() {
      return view('profile');
  }
	
		
  public function show($id)
    {   
        $user = \App\User::find($id);
        
	  	$variables = [
            "user" => $user,
        ];

        return view('profile', $variables);
  }
	
  public function edit($id)
    {   
        $user = \App\User::find($id);
	  	$variables = [
            "user" => $user,
        ];

        return view('profile', $variables);
  }

  public function update(Request $request, $id)
    { 
		$rules = [
        ];

        $messages = [
        ];

	  	
        $request->validate($rules, $messages);
	  	$user = \App\User::find($id);
		
		if(!file_exists(public_path('storage'))) {
       		\App::make('files')->link(storage_path('app/public'), public_path('storage'));
  		}
		
	 
		if ($request->file('image')){
    	$extensionImagen = $request->file('image')->getClientOriginalExtension();
    	$imagen = $request->file('image')->storeAs('avatars', uniqid() . "." . $extensionImagen, 'public');
		$user->image = $imagen;
		}

        $user->save();

        return back();
  }
	
	
}
