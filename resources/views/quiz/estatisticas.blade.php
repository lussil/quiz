@extends('components.page')

@section('title', 'Quiz')

@section('content')

    <div class="container ">

      <div class="row">
        <div class="info-box col-6">
            <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Questões respondidas</span>
                <span class="info-box-number">{{$questoesRespondidas}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>


        <div class="info-box col-6">
            <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Questões Acertadas</span>
                <span class="info-box-number">{{$questoesAcertadas}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>

    </div>

        <div class="info-box bg-success col-6">
            <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Precisão</span>
                <span class="info-box-number">{{$precisao}} %</span>

                <div class="progress">
                    <div class="progress-bar" style="width: {{$precisao}}%"></div>
                </div>
                <span class="progress-description">
                    Porcentagem de acertos em relação ao total de questões respondidas.
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>


        <a class="btn btn-info" href="{{ URL::route('quiz.index') }}">Inicio</a>

    </div>
@endsection
