<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinossauroController extends Controller
{
    public function listarDino() {
       $dino['name'] = 'T-rex';
       $dino['idade'] = '17';
       $dino['velocidade'] = '42km/h';
       $dino['altura'] = '4M';
       $dino = json_encode($dino);
        return $dino;
    }
}


