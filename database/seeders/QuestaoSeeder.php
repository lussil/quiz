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
            'questao' => 'A expressão laissez faire, laissez passer está vinculada à seguinte escola econômica:',
                ]);
        Questao::create([
            'questao' => 'Os sofistas desenvolveram-se em qual contexto da Grécia Antiga?',
                ]);
        Questao::create([
             'questao' => 'Como ficou conhecido a noção de regime absolutista que possuía alguns princípios iluministas?',
                ]);
    }
}
