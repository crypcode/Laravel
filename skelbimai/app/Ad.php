<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
   protected $fillable = ['catid','pavadinimas','aprasymas','price','email','location','phone', 'nuotrauka'];
}
