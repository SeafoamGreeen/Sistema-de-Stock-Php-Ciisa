<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'productos';

  public function stocks()
  {
    return $this->hasMany(Stock::class);
  }
}
