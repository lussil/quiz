@extends('components.page')

@section('title', 'Quiz')

@section('content')

    <div class="container ">


        {{ Form::open(['route' => 'quiz.resposta']) }}

      

        <div class="callout callout-info mt-3">
            <h5><i class="fas fa-info"></i>Questão:</h5>
            {{ $questao->questao }}
        </div>

        <div class="form-check">
            <input class="form-check-input  {{ $questao->alternativa[0]->valor }}" type="radio" name="alternativas"
                value=" {{ $questao->id }}" id="{{ $questao->id }}">
            <label class="form-check-label" for="{{ $questao->id }}">
                {{ $questao->alternativa[0]->alternativa }}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input  {{ $questao->alternativa[1]->valor }}" type="radio" name="alternativas"
                value=" {{ $questao->id }}" id="{{ $questao->id }}">
            <label class="form-check-label" for="{{ $questao->id }}">
                {{ $questao->alternativa[1]->alternativa }}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input  {{ $questao->alternativa[2]->valor }}" type="radio" name="alternativas"
                value=" {{ $questao->id }}" id="{{ $questao->id }}">
            <label class="form-check-label" for="{{ $questao->id }}">
                {{ $questao->alternativa[2]->alternativa }}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input  {{ $questao->alternativa[3]->valor }}" type="radio" name="alternativas"
                value=" {{ $questao->id }}" id="{{ $questao->id }}">
            <label class="form-check-label" for="{{ $questao->id }}">
                {{ $questao->alternativa[3]->alternativa }}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input  {{ $questao->alternativa[4]->valor }} " type="radio" name="alternativas"
                value=" {{ $questao->id }}" id="{{ $questao->id }}">
            <label class="form-check-label" for="{{ $questao->id }}">
                {{ $questao->alternativa[4]->alternativa }}
            </label>
        </div>


     


        {{ Form::close() }}


        <a class="btn btn-warning" href="#">Encerrar Tentativa</a>
        <a class="btn btn-primary  mt-2 mb-2"  href="{{ URL::route('quiz') }}">Próximo</a>

    </div>
@endsection


@section('javascript')
    <script>
        $(document).ready(function() {
            console.log("ready!");
            $('.correta').prop('checked', true).addClass('bg-success');
            $('.errada').addClass('bg-danger');
        });
    </script>

@endsection
