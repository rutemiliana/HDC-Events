<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Event extends Model
{
    protected $fillable = [
        'name',
        'city',
        'private',
        'description',
        'image'
      ];

      //especifica quue items é uma array e não uma string
      protected $casts = [
        'items' => 'array'
      ];

      //informa ao laravel que esse é um campo de data
      protected $dates = ['date']; 

      //tudo que foi enviado pelo put pode ser atualizado
      protected $guarded = [];

      public function user(){
        return $this->belongsTo(User::class);
      }

    
      
    use HasFactory;
}
