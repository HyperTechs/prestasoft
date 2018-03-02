<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;

class IdeaController extends Controller
{


    public function index(){

        return view('ideas.index');

    }

    public function getIdeas(){

        return Idea::orderBy('id','DESC')->get();

    }

    public function store(Request $request){

        $this->validate($request, [
            'description' => 'required|string'
        ]);

        Idea::create($request->all());
        return;
    }


}
