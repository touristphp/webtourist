<?php
include_once '../controller/database/ConnectDatabase.php';

class Blog extends ConnectDatabase{
 private $id;
 private $title;
 private $content;
 private $createdAt;
 private $updatedAt;
 private $deletedAt;
 private $image;

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
 public function getId($id=0)
 {
//  $this->id = $this->getConnect()->query("SELECT id FROM blog LIMIT 1");
  $valueFormQuery = $this->getArrayData();
  foreach ($valueFormQuery as $key =>  $value){

   if ($key==$id){
    $this->id = $value['id'];
   }
  }
  return $this->id;
 }

 public function getValueIdInURL($user_id){

 }

 /**
  * @return mixed
  */
 public function getContent($id=0)
 {
  $testconnect = $this->connect();
  $value = $testconnect->prepare("SELECT * FROM blog");
  $value->execute();
  $result = $value->fetchAll();
  foreach ($result as $key =>  $value){
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

   if ($key==$id){
    $this->image = $value['image'];
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
 ?>