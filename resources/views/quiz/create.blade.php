@extends('components.page')

@section('title', 'Quiz')

@section('content')

    <div class="container ">


        {{ Form::open(['route' => 'quiz.store']) }}
        <div class="form-floating mt-3 mb-3">
          {{ Form::textarea('questao', null, ['class' => 'form-control' ,'id' =>'floatingTextarea', 'placeholder' =>'Digite a questão']) }}
          {{ Form::label('questao', 'Digite o Enunciado', ['class' => 'form-label ' , 'for' => 'floatingTextarea' ]) }}
        </div>

        <select class="form-select mt-3 mb-3"  name='correta' aria-label="Default select example">
          <option selected disabled>Qual a alternatica correta?</option>
          <option value="1">Alternativa 1</option>
          <option value="2">Alternativa 2</option>
          <option value="3">Alternativa 3</option>
          <option value="4">Alternativa 4</option>
          <option value="5">Alternativa 5</option>
        </select>
    


        <div class="row">
            <div class="col">
                <div class="mb-3">
                    {{ Form::label('alternativa', 'Digite a alternativa 1', ['class' => 'form-label ']) }}
                    {{ Form::text('alternativa_1', null, ['class' => 'form-control']) }}
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    {{ Form::label('alternativa', 'Digite a alternativa 2', ['class' => 'form-label ']) }}
                    {{ Form::text('alternativa_2', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    {{ Form::label('alternativa', 'Digite a alternativa 3', ['class' => 'form-label ']) }}
                    {{ Form::text('alternativa_3', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    {{ Form::label('alternativa', 'Digite a alternativa 4', ['class' => 'form-label ']) }}
                    {{ Form::text('alternativa_4', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6 ">
                <div class="mb-3  ">
                    {{ Form::label('alternativa', 'Digite a alternativa 5', ['class' => 'form-label ']) }}
                    {{ Form::text('alternativa_5', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>

      


        {{ Form::submit('Enviar', ['class' => 'btn btn-success mt-2 mb-2']) }}
        <a class="btn btn-primary  mt-2 mb-2" href="{{ URL::route('quiz.index') }}">Voltar</a>

        {{ Form::close() }}
    </div>

@endsection
