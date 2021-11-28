<?php

class MainModel extends CI_Model
{
    function getSkoly()
    {
        $query = $this->db->query("SELECT `nazev`, `geo_lat`, `geo_long` FROM `skola`");
        return $query;
    }
}