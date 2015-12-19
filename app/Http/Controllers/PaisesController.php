<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaisesController extends Controller
{
      public function paises()
  {
     // Si la variable no existe la creamos
     if (!\Cache::has('pais')) {
     

         $url = "https://restcountries.eu/rest/v1/all";
         $body = file_get_contents($url);
         $json = json_decode($body);
         \Cache::put('pais', $json, 20);
     }
 
     //imprimimos en pantalla el objeto
     dd(\Cache::get('pais'));
 }



}


