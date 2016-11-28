<?php
namespace App\Http\Controllers;

class Conector
{
    private $DB_host = "localhost";
    private $DB_user = "root";
    private $DB_pass = "_proyectoinacap2017_";
    private $DB_name = "test_01";
    private $db;
    
    function __construct()
    {

        $this->db = new PDO('mysql:host='.$this->DB_host.';dbname='.$this->DB_name.';charset=utf8', $this->DB_user, $this->DB_pass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    
    function operacion()
    {
        return $this->db;
    }
}