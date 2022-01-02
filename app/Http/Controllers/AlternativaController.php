<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Questao;
use App\Models\Alternativa;


class AlternativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $alternativa = Alternativa::get();
            $questao = Questao::count();
            return view('quiz.index', ['alternativa' => $alternativa , 'questao' =>$questao]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternativa  $alternativa
     * @return \Illuminate\Http\Response
     */
    public function show(Alternativa $alternativa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternativa  $alternativa
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternativa $alternativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternativa  $alternativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternativa $alternativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternativa  $alternativa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternativa $alternativa)
    {
        //
    }
}
