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
        $titel = "Registreer";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('register', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }


    public function  showProfile(){
        $titel = "Profiel";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('profile', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }

    public function  showChangeprofile(){
        $titel = "Profiel";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('changeprofile', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }
  
    public function  showChangesubscription(){
        $titel = "Profiel";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('changesubscription', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }

    public function  showBetaalgegevens(){
        $titel = "Profiel";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('betaalgegevens', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }

    public function  showChangelogin(){
        $titel = "Profiel";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('changelogin', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }
    public function  showGekozenlurebox(){
        $titel = "Profiel";
        $pagina = str_replace(" ", "-", strtolower($titel)  );
        $active = $pagina;
        return view('gekozen-lurebox', ['pagina' => $titel, 'css' => $pagina, 'active' => $active]);
    }
}
