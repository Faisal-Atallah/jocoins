<?php

class Home extends CI_Controller

{





    public function index(){


        $this->load->view('header');


        $this->load->view('body');
        $this->load->view('steps');

        $this->load->view('footer');



    }


    public function st(){

        $this->load->view('steps');
    }



public function currencyData()
{

    $this->load->view('currencyData');


}



}