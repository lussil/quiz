<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alternativa;

class AlternativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alternativa::create([
            'questao_id' => '1',
            'alternativa'  => 'resposta 1',
            'valor' => 'errada',
                ]);
        Alternativa::create([
            'questao_id' => '1',
            'alternativa'  => 'resposta 2',
            'valor' => 'errada',
                ]);
        Alternativa::create([
            'questao_id' => '1',
            'alternativa'  => 'resposta 3',
            'valor' => 'correta',
                ]);
        Alternativa::create([
            'questao_id' => '1',
            'alternativa'  => 'resposta 4',
            'valor' => 'errada',
                ]);
        Alternativa::create([
            'questao_id' => '1',
            'alternativa'  => 'resposta 5',
            'valor' => 'errada',
                ]);

                Alternativa::create([
                            'questao_id' => '2',
                            'alternativa'  => 'monárquico',
                            'valor' => 'errada',
                                ]);
                Alternativa::create([
                    'questao_id' => '2',
                    'alternativa'  => 'autoritário',
                    'valor' => 'errada',
                        ]);
                Alternativa::create([
                    'questao_id' => '2',
                    'alternativa'  => 'ditatorial',
                    'valor' => 'correta',
                        ]);
                Alternativa::create([
                    'questao_id' => '2',
                    'alternativa'  => 'democrático',
                    'valor' => 'errada',
                        ]);
                Alternativa::create([
                    'questao_id' => '2',
                    'alternativa'  => 'resposta 5',
                    'valor' => 'errada',
                        ]);


                Alternativa::create([
                    'questao_id' => '3',
                    'alternativa'  => 'socialista',
                    'valor' => 'errada',
                         ]);
                Alternativa::create([
                    'questao_id' => '3',
                    'alternativa'  => 'fisiocrata',
                    'valor' => 'correta',
                        ]);
                Alternativa::create([
                    'questao_id' => '3',
                    'alternativa'  => 'comunista',
                    'valor' => 'errada',
                        ]);
                Alternativa::create([
                    'questao_id' => '3',
                    'alternativa'  => 'positivista',
                    'valor' => 'errada',
                        ]);
                Alternativa::create([
                    'questao_id' => '3',
                    'alternativa'  => 'anarquista',
                    'valor' => 'errada',
                        ]);

                
   


Alternativa::create([
'questao_id' => '4',
'alternativa'  => 'Terra entre mares',
'valor' => 'errada',
]);
Alternativa::create([
'questao_id' => '4',
'alternativa'  => 'Terra seca',
'valor' => 'errada',
]);
Alternativa::create([
'questao_id' => '4',
'alternativa'  => 'Terra entre rios',
'valor' => 'correta',
]);
Alternativa::create([
'questao_id' => '4',
'alternativa'  => 'Terra fértil',
'valor' => 'errada',
]);
Alternativa::create([
'questao_id' => '4',
'alternativa'  => 'Terra molhada',
'valor' => 'errada',
]);



Alternativa::create([
    'questao_id' => '5',
    'alternativa'  => 'catabolismo',
    'valor' => 'errada',
    ]);
    Alternativa::create([
    'questao_id' => '5',
    'alternativa'  => 'fermentação láctica',
    'valor' => 'errada',
    ]);
    Alternativa::create([
    'questao_id' => '5',
    'alternativa'  => 'anabolismo',
    'valor' => 'correta',
    ]);
    Alternativa::create([
    'questao_id' => '5',
    'alternativa'  => 'fermentação alcoólica',
    'valor' => 'errada',
    ]);
    Alternativa::create([
    'questao_id' => '5',
    'alternativa'  => 'quimiossíntese',
    'valor' => 'errada',
    ]);


}
 }
