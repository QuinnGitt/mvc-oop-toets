<?php

class reuzenradModel
{
    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    public function getreuzenrad()
    {
        $sql = "SELECT naam
                    ,hoogte
                    ,land
                    ,kosten
                    ,aantalPassagiers
            FROM    reuzenrad";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
