@extends('components.page')

@section('title', 'Quiz')

@section('content')

    <div class="container ">

        <h1 class=" text-center p-3 bg-info bg-gradient">Seja bem-vindo ao Mega-Quiz</h1>

        <div class="row">
            <div class="col text-center mt-2 mb-2"> {{ 'Questões cadastradas no nosso banco : ' . $questao }}</div>
        </div>
        <div class="row">

            <div class="col-6 text-center  mt-2 mb-2">
                <a class="btn btn-primary" href="{{ URL::route('quiz.create') }}">Cria Questão</a>
            </div>

            <div class="col-6 text-center  mt-2 mb-2">
                <a class="btn btn-warning" href="{{ URL::route('quiz') }}">Iniciar Quiz</a>
            </div>

        </div>

    </div>
  


@endsection
