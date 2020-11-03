<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("usuarios", function(){
    return array(
        "Maria", 
        "José",
        "Antônio", 
        "João",
        "Francisco", 
        "Ana", 
        "Luiz", 
        "Paulo",
        "Carlos", 
        "Manoel",
        "Pedro", 
        "Francisca",
        "Marcos",
        "Raimundo",
        "Sebastião",
        "Antônia",
        "Marcelo",
        "Jorge",
        "Márcia",
        "Geraldo",
        "Adriana",
        "Sandra",
        "Luis",
        "Fernando",
        "Fabio",
        "Roberto",
        "Márcio",
        "Edson",
        "André",
        "Sérgio",
        "Josefa",
        "Patrícia",
        "Daniel",
        "Rodrigo",
        "Rafael",
        "Joaquim",
        "Vera",
        "Ricardo",
        "Eduardo",
        "Terezinha",
        "Sônia",
        "Alexandre",
        "Rita",
        "Luciana",
        "Cláudio",
        "Rosa",
        "Benedito",
        "Leandro",
        "Raimunda",
        "Mário"
    );
});



Route::get('produtos', function (){
    return array(
        "Multiuso",
        "Ring Light 26cm",
        "Calcinha Cinta",
        "Modem 4g",
        "Garmin",
        "Tenere 250",
        "Maquina Cortar Cabelo",
        "Prato Infantil",
        "Helicóptero Controle Remoto",
        "Tapete Capacho",
        "Cadeira Poltrona",
        "Canto Alemão",
        "Rádio Antigo",
        "Geladeiras Usadas",
        "TV",
        "Perfumaria",
        "Cadeira Madeira",
        "Lustre Sala De Jantar",
        "TV Samsung",
        "Kunai"
    );
});
