<?php

include 'UserController.php';
include 'database/ConnectDatabase.php';

/**
 * Created by PhpStorm.
 * User: ngocquy
 * Date: 07/11/2017
 * Time: 16:55
 */
class BlogController extends ConnectDatabase
{
    private $id;
    private $title;
    private $content;
    private $createdAt;
    private $updatedAt;
    private $deletedAt;
    private $image;
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
        $data = $connect->query("SELECT * FROM blog");
        return $data;

    }

    /**
     * @return mixed
     */
    public function getContent($id=0)
    {
        $valueFormQuery = $this->getArrayData();
        foreach ($valueFormQuery as $key =>  $value){

            if ($key==$id){
                $this->content = $value['content'];
            }
        }
        return $this->content;
    }


    /**
     * @return mixed
     */
    public function getCreatedAt($id=0)
    {
        $valueFormQuery = $this->getArrayData();
        foreach ($valueFormQuery as $key =>  $value){
            if ($key==$id){
                $this->createdAt = date("d-m-Y", strtotime($value['created_at']));
            }
        }
//        $valueFormQuery = $this->getConnect()->query("SELECT created_at FROM blog");
//        foreach ($valueFormQuery as  $value){
//            $this->createdAt = $value[0];
//        }


        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getImage($id=0)
    {
        $valueFormQuery = $this->getArrayData();
        foreach ($valueFormQuery as $key =>  $value){

            if ($key=="0"){
                $this->image = $value['image'];
//                echo $key;
            }
        }
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getTitle($id=0)
    {
        $valueFormQuery = $this->getArrayData();
        foreach ($valueFormQuery as $key =>  $value){

            if ($key==$id){
                $this->title = $value['title'];
            }
        }
        return $this->title;
    }


}
$aa = new BlogController();

//echo $aa->getContent();
echo $aa->getCreatedAt();
echo $aa->getTitle(1);


