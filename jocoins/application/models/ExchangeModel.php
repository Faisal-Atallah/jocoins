<?php


class ExchangeModel extends CI_Model


{




    public function create($data)


    {


        if($this->db->insert('exchangeT', $data))
        {

            return TRUE;
        }


        return FALSE;

    }





}