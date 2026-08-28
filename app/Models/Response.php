<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
     protected $table = "responses";

    protected $fillable = [
        'resposta',
        'intention_id'
    ];

     public function intent()
    {
        return $this->belongsTo(Intent::class, 'intention_id');
    }
}
