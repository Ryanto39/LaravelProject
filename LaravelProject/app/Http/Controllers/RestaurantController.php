<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(){
        $data = [
            'stand' => ['Tahu Petis Yudhistira Semarang', 'Nasi Uduk Bu Sumi Jakarta Pusat'],
            'menu' => ['Lumpia Semarang, Tahu Petis, Babat Gongso', 'Nasi Uduk, Pecel Lele, Pecel Ayam, Aneka Sayuran'],
            'image' => ['https://images.solopos.com/2022/06/lumpia-.jpg', 'https://img.kurio.network/P1Obhh7cenTadrAZ6Hc_XPjaVws=/1200x1200/filters:quality(80)/https://kurio-img.kurioapps.com/21/09/01/53606332-ec0c-478c-add9-78815b5cc658.jpe'],
            'status' => ['Open', 'Closed']
        ];
        return view('restaurant', $data);
    }
}
