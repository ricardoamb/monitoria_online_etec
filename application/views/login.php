<?php

switch ($screen) :
    case 'login';
        $this->load->view('template/login');
        break;
    case 'entrar':
        $this->load->view('template/entrar');
        break;
    default:
        $this->load->view('template/four-o-four');
        break;
endswitch;