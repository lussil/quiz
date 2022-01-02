@extends('components.page')

@section('title', 'Quiz')

@section('section')

    <a href="{{ URL::route('quiz.index') }}">Voltar</a>

    {{ Form::open(['route' => 'quiz.store']) }}

    {{ Form::label('questao', 'Digite o Enunciado') }}<br>
    {{ Form::text('questao') }}
    <br>
    {{ Form::label('alternativa', 'Digite a alternativa 1') }}<br>
    {{ Form::text('alternativa_1') }}
    <br>
    {{ Form::label('alternativa', 'Digite a alternativa 2') }}<br>
    {{ Form::text('alternativa_2') }}
    <br>
    <br>
    {{ Form::label('alternativa', 'Digite a alternativa 3') }}<br>
    {{ Form::text('alternativa_3') }}
    <br>
    <br>
    {{ Form::label('alternativa', 'Digite a alternativa 4') }}<br>
    {{ Form::text('alternativa_4') }}
    <br>
    <br>
    {{ Form::label('alternativa', 'Digite a alternativa 5') }}<br>
    {{ Form::text('alternativa_5') }}
    <br>

    <br>
    {{ Form::submit('Enviar!') }}

    {{ Form::close() }}

    @endsection
   
