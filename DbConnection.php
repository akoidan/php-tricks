<?php

/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 2/12/17
 * Time: 11:35 AM
 */
class DbConnection
{
    protected $db_conn;
    public $db_name = 'php';
    public $db_user = 'root';
    public $db_pass = '';
    public $db_host = 'localhost';

    function connect()
    {
        $this->db_conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
        return $this->db_conn;
    }

}