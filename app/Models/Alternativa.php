<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questao;

class Alternativa extends Model
{
    use HasFactory;

  
    public function questao()
    {
        return $this->hasOne(Questao::class, 'id', 'questao_id');
    }

}
