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
    public function showAboutUs(){
        $titel = "Over ons";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('about-us', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }
    public function  showFaq(){
        $titel = "FAQ";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('faq', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }

    public function  showLogin(){
        $titel = "Login";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('login', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }

    public function  showRegister(){
        $titel = "Register";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('register', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }


    public function  showProfile(){
        $titel = "Profile";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('profile', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }
}
