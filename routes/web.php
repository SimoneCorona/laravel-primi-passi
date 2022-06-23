<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'name' => 'Simone',
        'lastname' => 'Corona',
        'tanks' => [
           [
                'name' => 'Panther ausf. G',
                'role' => 'Carro medio',
                'state' => 'Germania',

           ],
           [
                'name' => 'T34-57',
                'role' => 'Carro medio',
                'state' => 'Russia',
           ],
           [
                'name' => 'M4A3(76)W Sherman "Easy Eight"',
                'role' => 'Carro pesante',
                'state' => 'U.S.A.'
           ],
        ]
    ];
    return view('home', $data);
});

  
    Route::get('/header', function () {
        return view('header');
});