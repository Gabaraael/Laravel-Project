<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DinossauroController extends Controller
{
    public function listarDino() {
       $dinos = DB::select('SELECT * FROM dinosaur ORDER BY NAME');
        $dino['name'] = 'T-rex';
       $dino['idade'] = '17';
       $dino['velocidade'] = '42km/h';
       $dino['altura'] = '4M';
       $dino = json_encode($dino);
        return $dinos;
    }
}


