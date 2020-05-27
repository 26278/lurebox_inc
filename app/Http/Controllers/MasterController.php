<?php
/**
 * Created by PhpStorm.
 * User: jochemdewit
 * Date: 2020-05-27
 * Time: 12:36
 */

namespace App\Http\Controllers;


class MasterController
{
    public function showHome(){
    $titel = "Home";
    $pagina = strtolower($titel);
    $active = $pagina;
    return view('home', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }

    public function showProducts(){
        $titel = "Producten";
        $pagina = strtolower($titel);
        $active = $pagina;
        return view('producten', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }
}
