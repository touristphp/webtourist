<?php

/**
 * Created by PhpStorm.
 * User: ngocquy
 * Date: 07/11/2017
 * Time: 15:52
 */
abstract class ConnectDatabase
{
    private $url = 'mysql:host=localhost;dbname=tourist';
    private $userName = 'root';
    private $password = 'root';

    public function connect()
    {
        return new PDO($this->url, $this->userName, $this->password);
    }
}