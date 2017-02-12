<?php

/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 2/12/17
 * Time: 11:41 AM
 */
include_once('DbConnection.php');

class ManageUsers
{
    public $link;

    function __construct()
    {
        $db_connection = new DbConnection();
        $this->link = $db_connection->connect();
        return $this->link;
    }

    function registerUsers($username, $password, $ip_address, $time, $date)
    {

    }

}