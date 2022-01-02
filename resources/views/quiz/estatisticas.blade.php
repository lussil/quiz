@extends('components.page')

@section('title', 'Quiz')

@section('content')

    <div class="container ">

      
        <div class="info-box col-4">
            <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Questões respondidas</span>
                <span class="info-box-number">7</span>
            </div>
            <!-- /.info-box-content -->
        </div>


        <div class="info-box col-4">
            <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Acertos</span>
                <span class="info-box-number">7</span>
            </div>
            <!-- /.info-box-content -->
        </div>



        <div class="info-box bg-success col-4">
            <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Precisão</span>
                <span class="info-box-number">41,410</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                    Porcentagem de acertos em relação ao total de questões respondidas.
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>




        <a class="btn btn-success" href="#">Encerrar Tentativa</a>
        <a class="btn btn-info" href="#">Proxima questão</a>

    </div>
@endsection
