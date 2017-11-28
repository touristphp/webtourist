<?php
require_once '../model/User.php';
/**
 * Created by PhpStorm.
 * User: ngocquy
 * Date: 19/11/2017
 * Time: 20:16
 */
class HomeController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }
    
    public function register($userName, $password){
        return $this->user->register($userName, $password);
    }

    public function login($userName, $password){
        return $this->user->login($userName, $password);
    }

    public function redirect($url)
    {
        return $this->user-$this->redirect($url);
    }
}