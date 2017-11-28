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

    public function __construct()
    {
        $this->db = $this->getConnect();
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

            
//            return $queryRegister;

        }
        catch (PDOException $e){
            echo  "ERROR Database: ".$e->getMessage();
        }
    }

    public function login($userName, $password){
        try{
            $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
            $queryLogin = $this->db->prepare("SELECT * FROM `webtourist`.`user` WHERE user_name=:userName");
            $queryLogin->execute(array(':userName'=>$userName));
            $userRow=$queryLogin->fetch(PDO::FETCH_ASSOC);
            if($queryLogin->rowCount() > 0)
            {
                if(password_verify(password, $userRow['user_pass']))
                {
                    $_SESSION['user_name']=$userRow['user_name'];
                    $_SESSION['id'] = $userRow['id'];

                    echo 'login success';
                    return true;
                }
                else
                {
                    return false;
                }
            }
//            $queryLogin->bindparam(":userName", $userName);
//            $queryLogin->bindparam(":password",$hashedPassword);
//            $queryLogin->execute();
//            $count = $queryLogin->rowCount();
//            $valueFromDB = $queryLogin->fetch(PDO::FETCH_OBJ);
//
//            if ($count){
//                $_SESSION['user_name']=$valueFromDB->user_name;
//                $_SESSION['id']=$valueFromDB->id;
//                return true;
//            }
//            else{
//                return false;
//            }

        }
        catch (PDOException $exception){
            echo "ERROR db: ".$exception->getMessage();
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
        session_destroy();
        unset($_SESSION['user_name']);
//        header("Location: login.php");
        echo 'logout success';
        return true;
    }

}
