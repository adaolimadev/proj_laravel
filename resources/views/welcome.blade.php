@extends('layouts.main')

@section ('tittle', 'Pagina Inicial')

@section('content')
    
        <h1>Bem vindo ao Laravel</h1>

        <p>Nome: {{$nome}}</p>
        <p>Idade: {{$idade}}</p> <!--A variavel se refere a chave que vem no array -->
        <p>Profissão: {{$trampo}}</p>

        <p>Lista de montanhas que o <strong>{{$nome}}</strong> prefere: </p>

        <ul>
            @for ($i = 0; $i < count($mont); $i++)
              <li> {{ $mont[$i] }} </li>
            @endfor
        </ul>

        <p>Lista de tênis de trail que o <strong>{{$nome}}</strong> possui: </p>

        <ul>
            @foreach ($ten as $t)
                <li>{{$t}} </li>
            @endforeach

        </ul>

        {{--Este é um comentário no Blade! Não é rendereizado pelo navegador. --}}

@endsection
  