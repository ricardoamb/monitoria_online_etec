<?php

class Entrar extends CI_Controller
{

    public function index()
    {
        $this->load->view('login',array('screen'=>'entrar'));
    }

}