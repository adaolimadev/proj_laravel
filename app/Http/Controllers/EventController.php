<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event; 

class EventController extends Controller
{
    public function index()
    {
        //Faz a busca  de todos os registros
        $events = Event::all();

        //retorna passando por parametro o array de eventos preenchido:
        return view('welcome', ['events'=>$events]);
    }
    

    public function create(){
        return view('events.create');
    }

    public function store(Request $req){

        $event = new Event();

        $event->title = $req->title;
        $event->city = $req->city;
        $event->private = $req->private;
        $event->description = $req->description;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
        
    }
}
