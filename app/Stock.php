<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'stocks';

  public function producto()
  {
    return $this->belongsTo(Producto::class, 'productos_id');
  }

  public function sucursal()
  {
    return $this->belongsTo(Sucursal::class, 'sucursales_id');
  }
}
