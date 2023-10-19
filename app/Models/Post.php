<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
   protected $fillable =[

    'profile',
    'company',
    'description',
    'type',
    'salary',

   ];

}
