<?php


class Exchange extends CI_Controller
{



    function __construct()
    {
        parent::__construct();



        $this->load->model('ExchangeModel','send');
    }



    public function sendData(){


        $this->form_validation->set_rules('paying', 'Paying', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('receiving', 'Receiving');

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('phone', 'Phone');
        $this->form_validation->set_rules('tmessage', 'Text message');
        $this->form_validation->set_rules('whatsapp', 'WhatsApp');





        if ($this->form_validation->run() == FALSE) {
            echo 'SORRY';
        } else {
            $data = array(
                'paying' => $this->input->post('paying'),
                'amount' => $this->input->post('amount'),
                'receiving' => $this->input->post('receiving'),

                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'textmessage' => $this->input->post('tmessage'),
                'phonenumber' => $this->input->post('phone'),
                'whatsnumber' => $this->input->post('whatsapp')





            );

            if ($this->send->create($data) === TRUE) {

                echo 'ACCEPT';

            }



        }
    }



}