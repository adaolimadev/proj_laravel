<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event; 

class EventController extends Controller
{

    public function index()
    {
        $search = request('search');

        if($search){
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        }else{
            //Faz a busca  de todos os registros
            $events = Event::all();
        }

        //retorna passando por parametro o array de eventos preenchido:
        return view('welcome', ['events'=>$events, 'search' => $search]);
    }

    public function getEvents(){
        $events = Event::all();
        return view('events.myevents', ['events'=>$events]);
    }
    

    //Quando a rota create é chamada retorna a view (form)
    public function create(){
        return view('events.create');
    }

    //Função que recebe um array da Request e faz armazenar no banco de dados
    public function store(Request $req){

        //cria o objeto
        $event = new Event();

        //preenche os atributos com os dados do form
        $event->title = $req->title;
        $event->date = $req->date;
        $event->city = $req->city;
        $event->private = $req->private;
        $event->description = $req->description;
        $event-> items = $req->items;

        //image upload
        if($req->hasFile('image') && $req->file('image')->isValid()){
            //Pega a imagem atraves do request
            $reqImage = $req->image;

            //pega a extensão da imagem
            $extension = $reqImage->extension();

            //monta o nome da imagem p/ armazenamento no banco
            $imageName = md5($reqImage->getClientOriginalName() . strtotime("now") . "." . $extension );

            //Salva a imagem na pasta 
            $req->image->move(public_path('img/events'), $imageName);

            //Preenche o atributo 'image' do objeto 'event'
            $event->image = $imageName;

        }

        //Salva no banco de dados
        $event->save();

        //retorna para a pagina raiz com uma mensagem de sucesso
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
        
    }

    //Metodo para buscar 1 registro no BD
    public function show($id){

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);

    }

    //Método para excluir um evento do BD
    public function destroy($id){
       

        Event::findOrFail($id)->delete();

        return redirect('/events/myevents')->with('msg', 'Evento excluído com sucesso!');
    }

    public function edit($id){
        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);
    }

    public function update (Request $req){
        Event::findOrFail($req->id)->update($req->all());

        return redirect('/events/myevents')->with('msg', 'Evento editado com sucesso!');
    }

}
