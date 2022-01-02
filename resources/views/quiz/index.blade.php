<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quiz</title>
</head>

<body>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

{{"Questões cadastradas no nosso banco : " . $questao}}
    <h1>Seja bem-vindo ao Mega-Quiz</h1>

    <a href="{{ URL::route('quiz.create') }}">Cria Questão</a>

    <a href="{{ URL::route('quiz.create') }}">Iniciar Quiz</a>
    {{-- foreach ( $questao as $values)

    
        @foreach ($questao as $values)
        <li> {{$values->questao}}</li>
        
        @foreach ($values->id as $values)
        <ul>
            <li> {{$values->alternativa}}</li>
        </ul>
            
@endforeach
@endforeach --}}






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
