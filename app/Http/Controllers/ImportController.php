<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Events\CreateUser;
use App\Models\User;

class ImportController extends Controller
{
    public function form()
    {
        return view('upload');
    }

    public function import(Request $request)
    {
        // dd($request->file('file'));
        $path = $request->file('file')->store('imports', 'public');
        event(new CreateUser($path));

        return "File uploaded sucesfully!";
       
    }

    public function users(){
        $user = User::get();

        return view('users', compact('user'));
    }
}