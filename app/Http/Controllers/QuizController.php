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

        $questoesRespondidas =  $request->session()->get('respondidas');
        $questoesAcertadas   =  $request->session()->get('acertadas');
        
        if (!$request->session()->exists('respondidas')) {
            $request->session()->put('respondidas', 0);
            $request->session()->put('acertadas', 0);
            
        }
        $questoesRespondidas = $request->session()->increment('respondidas');
      
       if ($resultado->valor == 'correta') {
        $questoesAcertadas = $request->session()->increment('acertadas');
       } 
        
        return view('quiz.resultado', ['resultado' => $resultado , 'questao' => $questao]);

    }




    /**
     * Calcula os pontos e salva na session
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function calculaPontos(Request $request)
    {
        $message = [
            'alternativas.required' =>'Selecione uma resposta'
        ];


        $validated = $request->validate([
            'alternativas' => 'required'
           
        ], $message );

        $resposta = $request->alternativas;

        $resultado = Alternativa::findOrFail($resposta);

        $questoesRespondidas =  $request->session()->get('respondidas');
        $questoesAcertadas   =  $request->session()->get('acertadas');
        
        if (!$request->session()->exists('respondidas')) {
            $request->session()->put('respondidas', 0);
            $request->session()->put('acertadas', 0);
        }

        $questoesRespondidas = $request->session()->increment('respondidas');
          
        if ($resultado->valor == 'correta') {
         $questoesAcertadas = $request->session()->increment('acertadas');
        }

    }

    /**
     *  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function estatisticas()
    {
        if (!session()->exists('respondidas')) {
            session()->put('respondidas', 0);
            session()->put('acertadas', 0);
         }

        $questoesRespondidas =  session()->get('respondidas');
        $questoesAcertadas   =  session()->get('acertadas');
        $precisao = $questoesRespondidas == 0 ? 0 : ( $questoesAcertadas/$questoesRespondidas * 100);

       

        session()->forget(['acertadas', 'respondidas']);
        return view('quiz.estatisticas', ['questoesRespondidas' => $questoesRespondidas,'questoesAcertadas'=> $questoesAcertadas, 'precisao' => $precisao ]);
    }

  
}
