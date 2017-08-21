<?php


class ContactUS extends CI_Controller
{







    public function ContactView(){


        $this->load->view('header');


        $this->load->view('contact');

        $this->load->view('footer');


    }




}