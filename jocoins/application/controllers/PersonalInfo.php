<?php

class PersonalInfo extends CI_Controller

{





    function __construct()
    {
        parent::__construct();



        $this->load->model('personalInfoM','send');
    }



    public function send(){


        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('phone', 'Phone');
        $this->form_validation->set_rules('tmessage', 'Text message');
        $this->form_validation->set_rules('whatsapp', 'WhatsApp');

        if ($this->form_validation->run() == FALSE) {
            echo 'No';
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'textmessage' => $this->input->post('tmessage'),
                'phonenumber' => $this->input->post('phone'),
                'whatsnumber' => $this->input->post('whatsapp')




            );

            if ($this->send->create($data) === TRUE) {

                echo 'Yes';

            }



        }
    }





}