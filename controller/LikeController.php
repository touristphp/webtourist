<?php

// include 'UserController.php';
// include 'BlogController.php';
include 'database/ConnectDatabase.php';


class LikeController extends ConnectDatabase
{
	private $checkLike;
	private $totalLike;

	/**
     * @return mixed
     */
    public function getConnect()
    {
        $connect = $this->connect();
        return $connect;

    }
    

	 /**
     * @return mixed
     */
    public function getArrayData()
    {
        $connect = $this->connect();
        $data = $connect->query("SELECT count(user_id) as 'sum'  FROM webtourist.`like` where blog_id = 1;");
        return $data;

    }

    public function getDataaaa(){
    	$dataArr = $this->getArrayData();

    	foreach ($dataArr as $key => $value) {
    		echo $value[0];
    	}

    }

}
// echo 'string';

$like = new LikeController();
echo $like->getDataaaa();