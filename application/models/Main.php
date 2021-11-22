<?php

class Main extends Model
{
    function getSkoly()
    {
        $query = $this->db->query("SELECT nazev, geo-lat, geo-long FROM skola");
        return $query;
    }
}