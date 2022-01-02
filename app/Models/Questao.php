<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Questao extends Model
{
    
    use HasFactory;
    
    protected $table = "questoes";


    public function alternativa(){
        return $this->hasMany(Alternativa::class, 'questao_id', 'id');
    }

   
}
