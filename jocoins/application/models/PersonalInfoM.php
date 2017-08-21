<?php

class PersonalInfoM extends CI_Model

{




    public function create($data)


    {


        if($this->db->insert('personalinfo', $data))
        {

            return TRUE;
        }


        return FALSE;

    }






}