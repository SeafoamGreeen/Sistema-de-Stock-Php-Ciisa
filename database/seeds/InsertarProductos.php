<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('productos')->insert(array(
      [
        'codigoUnico' => '123456',
        'nombre' => 'Notebook Inspiron 15.6" / i5-10500H/8 GB RAM/256 GB SSD/Windows 10 Home/Negro',
        'categoria' => 'Computación',
        'desc' => 'Laptop de 15 pulgadas con las características esenciales que necesita y más, que incluye los últimos procesadores Intel® CinemaStream y CinemaSound.'
      ],

      [
        'codigoUnico' => '654321',
        'nombre' => 'Televisor LED 70 4K Ultra HD SMART TV ANDROID / MGA7000',
        'categoria' => 'TV',
        'desc' => 'Este televisor con Sintonizador Digital ISDB-T y funcionalidad en base a Android TV te permitirá disfrutar de las mejores películas e imágenes con calidad UHD, además de las aplicaciones como YouTube, Netflix o Amazon Prime.'
      ]
    ));
  }
}
