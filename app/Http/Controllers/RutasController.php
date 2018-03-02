<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RutasController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function client(){
        return view('admin.client.index',compact('clients'));
    }

}
