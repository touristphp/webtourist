<?php

/**
 * Created by PhpStorm.
 * User: ngocquy
 * Date: 07/11/2017
 * Time: 15:52
 */
abstract class ConnectDatabase
{
    private $url = 'mysql:host=localhost;dbname=webtourist';
    private $userName = 'root';
    private $password = 'root';

    public function connect()
    {
        $connect = new PDO($this->url, $this->userName, $this->password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }
}