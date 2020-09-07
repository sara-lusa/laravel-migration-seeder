<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Villain extends Model
{
  protected $fillable = [
    'name',
    'nickname',
    'evilpower',
    'age',
    'Imprigionato'
  ];
}
