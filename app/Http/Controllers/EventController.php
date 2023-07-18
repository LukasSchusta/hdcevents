<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Lucas";
        $idade = 17;

        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        return view('welcome', [
            'nome' => $nome, 
            'idade' => $idade,
            'arr' => $arr,
        
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
