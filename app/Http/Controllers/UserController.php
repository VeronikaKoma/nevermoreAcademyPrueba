<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('createUser');


    }

    /**
     * Show the form for creating a new resource.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
        //
        $user = request()->except('_token');

        UserController::create($user); 

        return redirect()->route ('home');


    }
    
    
}