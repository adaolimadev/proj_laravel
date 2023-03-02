<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Adão Lima";
        $idade = 27;
    
        $montanhas = ['Anhangava','Caratuva','Pico Paraná','Tucum'];
    
        $tenis = ['Kalenji XT7', 'Salomon Alphacross ', 'Kalenji XT8'];
    
        return view('welcome',
         [
            'nome' => $nome, 
            'idade' =>$idade, 
            'trampo' => 'Programação PHP',
            'mont' => $montanhas,
            'ten' => $tenis
        ]);

    }

    public function create(){
        return view('events.create');
    }
}
