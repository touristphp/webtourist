<?php
require_once '../model/User.php';



class UserController{

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

        public function logout(){
          return $this->user->logout();
        }

        public function getUserId(){
          return $this->user->getUserId();
        }

        public function redirect($url)
        {
            return $this->user-$this->redirect($url);
        }

        public function checkUserLogged()
        {

            if(array_key_exists('id',$_SESSION) && !empty($_SESSION['id'])) {
                return true;
            }
            else{
                return false;
            }

        }

}

?>
