<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intent extends Model
{
    protected $table = "intents";

    protected $fillable = [
        'nome'
    ];

     public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }

    // Uma intenção tem várias respostas
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
