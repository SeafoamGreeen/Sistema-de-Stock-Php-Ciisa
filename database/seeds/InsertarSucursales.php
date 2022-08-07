<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('sucursales')->insert(array(
      [
        'region' => 'Libertador General Bernardo O Higgins',
        'comuna' => 'Rancagua'
      ],

      [
        'region' => 'Maule',
        'comuna' => 'Talca'
      ]
    ));
  }
}
