<?php

    include_once '../controller/database/ConnectDatabase.php';
    /**
     * author ngocquy
     */
    class Like extends ConnectDatabase
    {
        private $id;
        private $userId;
        private $blogId;
        public $check = false;
        private $connect;

        function __construct()
        {

        }

        public function getArrayData()
        {
            $connect = $this->connect();
            $data = $connect->query("SELECT * FROM `webtourist`.`like`");
            return $data;
        }

        public function getArrayDataWhenUserLikeBlog()
        {
            $connect = $this->connect();
            $data = $connect->query("SELECT * FROM `webtourist`.`like` WHERE `like`.`user_id` = `like`.`blog_id`");
            return $data;
        }

        public function getDataaaa(){
        	$dataArr = $this->getArrayData();

        	foreach ($dataArr as $key => $value) {
        		echo $value[0];
        	}
        }
        public function test(){
        	echo 'quydeptrai';
        }

        public function checkLiked($user, $blog)
        {
            $checkLiked;
            $dataArr = $this->getArrayData();

        	foreach ($dataArr as $key => $value) {
                if ($value['blog_id'] == $blog) {
                    if ($value['user_id'] == $user) {
                        $checkLiked = true; break;
                    }
                    else {
                        $checkLiked = false;
                    }
        		}
        	}
            return $checkLiked;
        }

        public function buttonUnLike($user, $blog)
        {
            $sqlQuery = "DELETE FROM `webtourist`.`like` WHERE user_id = :userId AND blog_id = :blog_id";
            $data = $this->connect()->prepare($sqlQuery);
            $data->bindparam(":userId", $user);
            $data->bindparam(":blog_id", $blog);
            $data->execute();

        }

        public function buttonLike($user, $blog)
        {

            $sqlQuery = "INSERT INTO `webtourist`.`like` (`user_id`,`blog_id`) VALUE (:userId,:blog_id)";

            $data = $this->connect()->prepare($sqlQuery);
            $data->bindparam(":userId", $user);
            $data->bindparam(":blog_id", $blog);
            $data->execute();
        }

    }

    // $likeObject = new Like();
    // $returnUnlikeToLike = NULL;
    // $returnlikeToUnLike = NULL;
    //
    //     if (isset($_POST['user_id']) && !empty($_POST["user_id"])) {
    //
    //         $userIdAjax = $_POST['user_id'];
    //         $blogIdAjax = $_POST['blog_id'];
    //         $valueButton = $_POST['value'];
    //
    //         if ($valueButton == "unlike"){
    //             // $likeObject->buttonLike($userIdAjax,$blogIdAjax);
    //             $returnUnlikeToLike = "true";
    //             // $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    //             //
    //             // echo json_encode($arr);
    //             echo json_encode($returnUnlikeToLike);
    //         }
    //         if ($valueButton == "like") {
    //             // $likeObject->buttonUnLike($userIdAjax,$blogIdAjax);
    //             $returnUnlikeToLike = "false";
    //             echo json_encode($returnUnlikeToLike);
    //         }
    //
    //     }


?>
