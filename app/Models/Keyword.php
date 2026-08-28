<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
     protected $table = "keywords";

    protected $fillable = [
        'nome',
        'intent_id',
        'peso'
    ];

      public function intent()
    {
        return $this->belongsTo(Intent::class,'intention_id');
    }
}
