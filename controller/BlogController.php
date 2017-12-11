<?php

// include 'database/ConnectDatabase.php';

include_once '../model/Blog.php';
include '../model/Like.php';

/**
 * Created by PhpStorm.
 * User: ngocquy
 * Date: 07/11/2017
 * Time: 16:55
 */

class BlogController
{

    public $blog;
    public  $blog_id;


    public function __construct()
    {
        $this->blog = new Blog();
    }

    public function invoke()
    {
        if (!isset($_GET['blog']))
        {
            $blog_id = 0;
            return $blog_id;

        }
        else
        {
            $blog_id = $_GET['blog'];
            return $blog_id;
        }
    }

    public function getContent($blog_id=0){
       $content =  $this->blog->getContent($blog_id);
        return $content;

    }

    public function getId($id=0){
        $getId = $this->blog->getId($id);
        echo $getId;
    }

    public function getCreatedAt($id=0){
        $getId = $this->blog->getCreatedAt($id);
        echo $getId;
    }

    public function getImage($id=0){
        $getId = $this->blog->getImage($id);
        echo $getId;
    }

    public function getTitle($id=0){
        $getId = $this->blog->getTitle($id);
        echo $getId;
    }

}

$likeObject = new Like();
$returnUnlikeToLike = NULL;
$returnlikeToUnLike = NULL;

    if (isset($_POST['user_id']) && !empty($_POST["user_id"])) {

        $userIdAjax = $_POST['user_id'];
        $blogIdAjax = $_POST['blog_id'];
        $valueButton = $_POST['value'];

        if ($valueButton == "unlike"){
            $likeObject->buttonLike($userIdAjax,$blogIdAjax);
            $returnUnlikeToLike = "true";
            // $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
            //
            // echo json_encode($arr);
            echo json_encode($returnUnlikeToLike);
        }
        if ($valueButton == "like") {
            $likeObject->buttonUnLike($userIdAjax,$blogIdAjax);
            $returnUnlikeToLike = "false";
            echo json_encode($returnUnlikeToLike);
        }

    }
