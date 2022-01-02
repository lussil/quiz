<?php

namespace App\Http\Controllers;

use App\Models\Questao;
use App\Models\Questao_Alternativas;
use App\Models\Alternativa;
use Illuminate\Http\Request;

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
        'questao.max' => 'O enunciado não pode ter mais que :max'
        ] ;

        $validated = $request->validate([
            'questao' => 'required|max:455'
            
        ], $message );

        $questao = new Questao;
        $questao->questao = $request->questao;
        $questao->save();


        $alternativas[] = $request->alternativa_1;
        $alternativas[] = $request->alternativa_2;
        $alternativas[] = $request->alternativa_3;
        $alternativas[] = $request->alternativa_4;
        $alternativas[] = $request->alternativa_5;

        foreach ($alternativas as $key => $value) {
            $altenativa = new alternativa;
            $altenativa->questao_id = $questao->id;
            $altenativa->alternativa = $value;
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
