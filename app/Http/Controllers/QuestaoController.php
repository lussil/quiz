<?php

namespace App\Http\Controllers;

use App\Models\Questao;
use App\Models\Questao_Alternativas;
use App\Models\Alternativa;
use Illuminate\Http\Request;
use App\Rules\ValidarCorreta;

class QuestaoController extends Controller
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

        $message = [
        'questao.required' => 'Preecha o enunciado',
        'questao.max' => 'O enunciado não pode ter mais que :max',
        'alternativa_1.required' => 'Preecha a primeira alternativa',
        'alternativa_2.required' => 'Preecha a segunda alternativa',
        'alternativa_3.required' => 'Preecha a terceira alternativa',
        'alternativa_4.required' => 'Preecha a quarta alternativa',
        'alternativa_5.required' => 'Preecha a quinta alternativa',
        'correta.required' => 'Selecione qual a alternativa é a correta',
        'correta.min'=>'Selecione uma alternativa valida',
        'correta.max'=>'Selecione uma alternativa valida'
        ] ;

        $validated = $request->validate([
            'questao' => 'required|max:455',
            'alternativa_1' => 'required',
            'alternativa_2' => 'required',
            'alternativa_3' => 'required',
            'alternativa_4' => 'required',
            'alternativa_5' => 'required',
            'correta' => ['required', new ValidarCorreta]
            
        ], $message );


        $valor = $request->correta;

        $questao = new Questao;
        $questao->questao = $request->questao;
        $questao->save();


        $alternativas[] = $request->alternativa_1;
        $alternativas[] = $request->alternativa_2;
        $alternativas[] = $request->alternativa_3;
        $alternativas[] = $request->alternativa_4;
        $alternativas[] = $request->alternativa_5;
        $valor = $request->correta;
        $i= 1;
        
        foreach ($alternativas as $key => $value) {
            $altenativa = new alternativa;
            $altenativa->questao_id = $questao->id;
            $altenativa->alternativa = $value;
            if ($i == $valor ) {
                $altenativa->valor = 'correta';
            }else{
                $altenativa->valor = 'errada';
            }
            $i++;
            $altenativa->save();
        };
           
      /* 
        foreach ($alternativas as $key => $value) {
            $altenativa = new Alternativa;
            $altenativa->alternativa = $value;
            $altenativa->save();

            $altenativa_questao = new Questao_Alternativas;
            $altenativa_questao->questao_id = $questao->id;
            $altenativa_questao->alternativa_id = $altenativa->id;
            $altenativa_questao->save();
        };
 */
        return redirect()->route('quiz.index')->with('message','Questão Cadastrada Com Sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function quiz()
    {
        $alternativa = Alternativa::inRandomOrder()->first();
        $questao = Questao::inRandomOrder()->limit(1)->get();
        $pontos = 0;
        return view('quiz.quiz', ['alternativa' => $alternativa , 'questao' =>$questao, 'pontos'=>$pontos]);   
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function resposta(Request $request)
    {
        $message = [
            'alternativas.required' =>'Selecione uma resposta'
        ];


        $validated = $request->validate([
            'alternativas' => 'required'
           
        ], $message );

        $resposta = $request->alternativas;


        return redirect()->route('quiz.index')->with('message','Questão Respondida Com Sucesso');

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
