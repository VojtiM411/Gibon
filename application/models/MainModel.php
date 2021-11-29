<?php

class MainModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('gibon');
    }
    function getSkoly()
    {
        $query = $this->db->query("SELECT `nazev`, `geo_lat`, `geo_long` FROM `skola`");
        return $query;
    }
    function getSkolyAZ()
    {
        $query = $this->db->query("SELECT `nazev`, `geo_lat`, `geo_long` FROM `skola` ORDER BY `nazev` ASC");
        return $query;
    }
    public function getPrijati()
    {
        $query = $this->db->query("SELECT pocet_prijatych.pocet, pocet_prijatych.rok, skola.nazev, obor.nazev FROM `pocet_prijatych`
        JOIN skola ON pocet_prijatych.skola = skola.id
        JOIN obor ON pocet_prijatych.obor = obor.id
        ORDER BY pocet_prijatych.id ASC");  
        return $query->result(); 
    }
}