<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/prodotti', function () {
    $paste = config('pasta');
    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($paste as $pasta) {
        switch ($pasta['tipo']) {
            case 'corta':
                $corte[] = $pasta;
                break;

            case 'lunga':
                $lunghe[] = $pasta;
                break;

            case 'cortissima':
                $cortissime[] = $pasta;
                break;
        }
    }
    dump($lunghe);
    return view('prodotti', ['lunghe'=>$lunghe,'corte'=>$corte,'cortissime'=>$cortissime,]);
});
Route::get('/news', function () {
    return view('news');
});
