<?php

include_once '../model/Like.php';


class LikeController
{
	private $like;

	public function __construct()
    {
        $this->$like = new Like();
    }

    public function checkLiked($userId, $blogId){
		return $this->$like->checkLiked($userId, $blogId);
    }

	public function clickButtonUnLike($userId, $blogId)
	{
		return $this->$like->buttonUnLike($userId, $blogId);
	}

	public function clickButtonUnLike($userId, $blogId)
	{
		return $this->$like->buttonLike($userId, $blogId);
	}

}
// $likeobj = new Like();
// $arrayData = array();
// if(isset($_POST['blog_id'])) {
// 	$blogId = $_POST['blog_id']);
// 	$userId = $_POST['user_id']);
//   if ($likeobj->checkLiked($userId,$blogId)) {
//   	$arrayData['liked'] = "true";
//
//   }
//   else {
//   	$arrayData['liked'] = "false";
//   }
//
// }
