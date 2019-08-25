<?php

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('login',array('screen'=>'login'));
    }

    public function entrar()
    {

        $this->load->view('login',array('screen'=>'entrar'));

    }

}