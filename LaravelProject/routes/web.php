<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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

// Route::get('/home', function () {
//     $arrStand = ['Tahu Petis Yudhistira Semarang', 'Nasi Uduk Bu Sumi Jakarta Pusat'];
//     $menu = ['Lumpia Semarang, Tahu Petis, Babat Gongso', 'Nasi Uduk, Pecel Lele, Pecel Ayam, Aneka Sayuran'];
//     $imagePath = ['https://images.solopos.com/2022/06/lumpia-.jpg', 'https://img.kurio.network/P1Obhh7cenTadrAZ6Hc_XPjaVws=/1200x1200/filters:quality(80)/https://kurio-img.kurioapps.com/21/09/01/53606332-ec0c-478c-add9-78815b5cc658.jpe'];    
//     $status = ['Open', 'Closed'];
//     return view('restaurant')
//     ->with('stand', $arrStand)
//     ->with('menu', $menu)
//     ->with('image', $imagePath)
//     ->with('status', $status);
// }
// );

Route::get('/home', [RestaurantController::class,'index']);