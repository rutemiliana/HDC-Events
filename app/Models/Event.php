<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Event extends Model
{
  use HasFactory;

    protected $fillable = [
        'title',
        'city',
        'private',
        'description',
        'image',
        'date',
        'items'
      ];

      //especifica que items é uma array e não uma string
      protected $casts = [
        'items' => 'array'
      ];

      //informa ao laravel que esse é um campo de data
      protected $dates = ['date']; 

      //*permite que tudo que foi enviado pelo put pode ser atualizado, se tiver alguma restrição, só colocar no array
      protected $guarded = [];

      public function user(){
        return $this->belongsTo(User::class);
      }

    
      
}
