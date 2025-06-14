<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    protected $fillable = [
    'idUser',
    'nomeTarefa',
    'dataTermino',
    'descricao',
    'deletada',
    'finalizada'
   ];
}
