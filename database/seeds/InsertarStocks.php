<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarStocks extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('stocks')->insert(array(

      [
        'cantidad' => '50',
        'precio' => '599.990',
        'estado' => 'En Stock',
        'sucursales_id' => '1',
        'productos_id' => '2'
      ],

      [
        'cantidad' => '0',
        'precio' => '599.990',
        'estado' => 'Sin Stock',
        'sucursales_id' => '2',
        'productos_id' => '2'
      ],

      [
        'cantidad' => '100',
        'precio' => '849.990',
        'estado' => 'En Stock',
        'sucursales_id' => '2',
        'productos_id' => '1'
      ],

      [
        'cantidad' => '0',
        'precio' => '849.990',
        'estado' => 'Sin Stock',
        'sucursales_id' => '1',
        'productos_id' => '1'
      ],
    ));
  }
}
