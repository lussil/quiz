<?php

namespace App\Http\Controllers;

use App\Models\Questao;
use App\Models\Questao_Alternativas;
use App\Models\Alternativa;
use Illuminate\Http\Request;
use App\Rules\ValidarCorreta;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function quiz()
    {
       
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function resposta(request $request)
    {
        $message = [
            'alternativas.required' =>'Selecione uma resposta'
        ];


        $validated = $request->validate([
            'alternativas' => 'required'
           
        ], $message );


        $resposta = $request->alternativas;

        $resultado = Alternativa::findOrFail($resposta);

        $id_questao = $resultado->questao_id;

        $questao = Questao::findOrFail($id_questao);
        
        return view('quiz.resultado', ['resultado' =>$resultado , 'questao' => $questao]);

    }


     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function show(Questao $questao)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function edit(Questao $questao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questao $questao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questao $questao)
    {
        //
    }
}
