@extends('layouts.main')

@section ('tittle', 'Criar Evento')

@section('content')

<div class="container mt-4 text-center " id="container-list">
    <h1 class="text-light">Eventos Cadastrados</h1>
    <table class='table table-hover table-dark mt-4' >
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Cidade</th>
                <th>Evento Privado</th>
                <th>Data Evento</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
        
            <tr>
            @forelse ($events as $e)
                <td>{{ $e->id }} </td>
                <td>{{ $e->title }}</td>
                <td>{{ $e->description }} </td>
                <td>{{ $e->city }} </td>
                <td>{{ $e->private ==1 ? "Sim" : "Não"}}</td>
                <td>{{ date('d/m/Y', strtotime($e->date)) }} </td>
                <td class="">
                        <a href="/public/events/edit/{{$e->id}}" class="btn btn-info"><ion-icon name="create-outline"></ion-icon>Editar </a> 
                        <form action="/public/events/{{$e->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-delete"><ion-icon name="trash-outline"></ion-icon>Excluir</button>
                        </form>
                </td>
            @empty
                <td colspan="7">Nenhum evento cadastrado!</td>
            @endforelse
            </tr>

        </tbody>
    </table>
  
    
</div>

@endsection