<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        echo view('front/head_view');
        echo view('front/bienvenidos_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function quienes_somos() 
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos_view.php');
        echo view('front/footer_view');
    }
    public function acerca() 
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acerca_view.php');
        echo view('front/footer_view');
    }
    public function iniciar_sesion() 
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/iniciar_sesion_view.php');
        echo view('front/footer_view');
    }
    public function registro() 
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registro_view.php');
        echo view('front/footer_view');
    }
}
