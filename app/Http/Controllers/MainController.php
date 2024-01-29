<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function base() 
        {
            $actus = Actu::all();// Récupération de toutes les instances de la classe Actu (Actu dans Models).
            // Retourne la vue 'home' avec les données passées en paramètre.
            // Dans ce cas, on passe les résultats de la récupération des actualités (actus) à la vue.
            return view('base', [
                'actus' => $actus,
    
            ]);
        }
}
