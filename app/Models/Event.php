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
      ];

      //especifica quue items é uma array e não uma string
      protected $casts = [
        'items' => 'array'
      ];
      
    use HasFactory;
}
