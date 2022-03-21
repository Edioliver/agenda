<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'nome', 'email', 'telefone'
    ];

}
