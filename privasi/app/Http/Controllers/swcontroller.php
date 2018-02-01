<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class swcontroller extends Controller
{
    public function category($key){
        $string = file_get_contents("http://swapi.co/api/$key");
        $json_a = json_decode($string,true);

        return view('category', ['json' => $json_a['results'],
                                'category'=>$key]);
    }

    public function category_films(){
        $string = file_get_contents("http://swapi.co/api/films");
        $json_a = json_decode($string,true);

        return view('category_films', ['json' => $json_a['results']]);
    }

}
