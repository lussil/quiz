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
      
                
    }
}
