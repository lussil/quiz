@extends('components.page')

@section('title', 'Quiz')

@section('content')

<div class="container ">
 
   
    {{ Form::open(['route' => 'quiz.resposta']) }}
    @foreach ($questao as $key => $value)
         
           <div class="callout callout-info mt-3">
            <h5><i class="fas fa-info"></i>Questão:</h5>
            {{ $value->questao }}
          </div>
        @foreach ($value->alternativa as $altenativa)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="alternativas" value=" {{$altenativa->id}}"
             id="{{$altenativa->id}}">
            <label class="form-check-label" for="{{$altenativa->id}}">
                {{$altenativa->alternativa}}
            </label>
          </div>
        @endforeach 
    @endforeach


    {{ Form::submit('Responder', ['class' => 'btn btn-success mt-2 mb-2']) }}
  

    {{ Form::close() }}

    
<a class="btn btn-warning" href="#">Encerrar Tentativa</a>
<a class="btn btn-primary  mt-2 mb-2" href="{{ URL::route('quiz.index') }}">Voltar</a>

</div>
   @endsection