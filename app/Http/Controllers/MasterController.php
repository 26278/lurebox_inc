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
    $pagina = "Home";
    $css = strtolower($pagina);
    $active = $css;
    return view('home', ['pagina' => $pagina, 'css' => $css, 'active' => $active]);
    }

    public function showProducts(){
        $pagina = "Producten";
        $css = strtolower($pagina);
        $active = $css;
        return view('producten', ['pagina' => $pagina, 'css' => $css, 'active' => $active]);
    }
}
