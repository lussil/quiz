@extends('components.page')

@section('title', 'Quiz')

@section('content')


pontos : {{$pontos}}
    responder quiz <br>
   
    @foreach ($questao as $key => $value)
           {{ $value->questao }}
       
        @foreach ($value->alternativa as $altenativa)
            <ul>
                <li class="list-group-item">
                 {{$altenativa->alternativa}}
                </li>
            </ul>
        @endforeach 
    @endforeach

   @endsection