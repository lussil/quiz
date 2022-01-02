@extends('components.page')

@section('title', 'Seja Bem-Vindo ao Quiz')

@section('content')

    <div class="container ">

        <h1 class=" text-center p-3 bg-info bg-gradient">Seja bem-vindo ao Mega-Quiz</h1>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Questões cadastradas</span>
                        <span class="info-box-number">{{ $questao }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-3 text-center  mt-2 mb-2">
                <a class="btn btn-primary" href="{{ URL::route('quiz.create') }}">Cria Questão</a>
            </div>

            <div class="col-3 text-center  mt-2 mb-2">
                <a class="btn btn-warning" href="{{ URL::route('quiz') }}">Iniciar Quiz</a>
            </div>
  
        </div>
    </div>



@endsection
