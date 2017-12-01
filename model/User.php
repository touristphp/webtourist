<?php

include_once '../controller/database/ConnectDatabase.php';


/**
 * Created by PhpStorm.
 * User: ngocquy
 * Date: 22/11/2017
 * Time: 17:14
 */
class User extends ConnectDatabase
{
    private $db;
    private $userId;


    public function __construct()
    {
        $this->db = $this->getConnect();
        // $this->$userId = $_SESSION['id'];
    }

    /**
     * @return mixed
     */
    public function getConnect()
    {
        $connect = $this->connect();
        return $connect;

    }



    public function register($userName, $password){

        try{

            $newPasswordHashed = password_hash($password, PASSWORD_DEFAULT);
            $queryRegister = $this->db->prepare("INSERT INTO `webtourist`.`user` (`user_name`,`password`) VALUES (:userName, :password)");
            $queryRegister->bindparam(":userName", $userName);
            $queryRegister->bindparam(":password", $newPasswordHashed);
            $queryRegister->execute();

        }
        catch (PDOException $e){
            echo  "ERROR Database: ".$e->getMessage();
        }
    }

    public function login($userName, $password)
    {
        try{

            $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
            $queryLogin = $this->db->prepare("SELECT * FROM `webtourist`.`user` WHERE user_name = :userName");
            $queryLogin->bindParam(':userName', $userName);
            $queryLogin->execute();
            $userRow = $queryLogin->fetch(PDO::FETCH_ASSOC);

            if($queryLogin->rowCount() > 0)
            {
                if(password_verify($password, $userRow['password']))
                {
                    session_start();
                    $_SESSION['user_name']=$userRow['user_name'];
                    $_SESSION['id'] = $userRow['id'];


                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        catch (PDOException $exception){
            echo "ERROR db: ".$exception->getMessage();
        }
    }

    public function getUserId()
    {
        if (isset($_SESSION['id'])) {
            return $_SESSION['id'];
        }
        else {
            return 0;
        }
    }

    public function is_loggedin()
    {
        if(isset($_SESSION['user_name']))
        {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function logout()
    {

        session_start();
        unset($_SESSION['user_name']);
        unset($_SESSION['id']);
        session_destroy();
        echo "ok";
        header("Location: /tourist/webtourist/view/login.php");


    }

}
// $a = new User();
// $a->logout();
// echo "unset session";
