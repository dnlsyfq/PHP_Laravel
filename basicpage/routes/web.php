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
    return view('welcome');
});



Route::get("/page",function(){
    $pizza = ['type'=>'hawaiian','base'=>'crust','price'=>10];
    return view('page', $pizza);
});

Route::get("/pizzas",function(){
    $pizzas = [
        ['type' => 'hawaiian','base'=>'cheesy crust'],
        ['type' => 'volcano','base' => 'garlic crust'],
        ['type' => 'veg supreme','base' => 'thin & crispy']
    ] ;
    return view('pizzas',['pizzas'=>$pizzas]);
});

Route::get("/pizzasSeven",function(){
    $pizzas = [
        ['type' => 'hawaiian','base'=>'cheesy crust'],
        ['type' => 'volcano','base' => 'garlic crust'],
        ['type' => 'veg supreme','base' => 'thin & crispy']
    ] ;
    return view('pizzasSeven',['pizzas'=>$pizzas]);
});