<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
      
    use HasFactory;
}
