<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class swcontroller extends Controller
{
    public function category($key){
        $string = file_get_contents("http://swapi.co/api/$key");
        $json_a = json_decode($string,true);
        $json_b['next'] = $json_a['next'];
        $json = [];
        array_push($json, $json_a['results']);
        while ($json_b['next']){
            $string1 = file_get_contents($json_b['next']);
            $json_b = json_decode($string1,true);
            array_push($json, $json_b['results']);
            
        };

        return view('category', ['json' => $json,
                                'category'=>$key]);
    }

    public function category_films(){
        $string = file_get_contents("http://swapi.co/api/films");
        $json_a = json_decode($string,true);

        return view('category_films', ['json' => $json_a['results']]);
    }

}
