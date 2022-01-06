<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Questao::create([
            'questao' => 'La única letra del alfabeto español que no existe en portugués es:',
                ]);
        Questao::create([
            'questao' => 'Os sofistas desenvolveram-se em qual contexto da Grécia Antiga?',
                ]);
        Questao::create([
             'questao' => 'A expressão laissez faire, laissez passer está vinculada à seguinte escola econômica:',
                ]);
        Questao::create([
            'questao' => 'O que o termo Mesopotâmia significa?',
                ]);
        Questao::create([
            'questao' => 'O ____________ compreende as reações de síntese de substâncias que serão utilizadas para o crescimento do organismo e reparação de suas perdas. A opção que substitui o espaço em branco é:',
                ]);

    }
}
