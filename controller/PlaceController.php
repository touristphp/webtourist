	<?php
include 'UserController.php';
include 'database/ConnectDatabase.php';
include_once '../model/Place.php';
/**
 * Created by PhpStorm.
 * User: ngocquy
 * Date: 07/11/2017
 * Time: 16:55
 */
class PlaceController extends ConnectDatabase {
	public $place;
	public $place_id;
	public function __construct() {
		$this->place = new place();
	}
	public function invoke() {
		if (!isset($_GET['place'])) {
			$place_id = 0;
			return $place_id;
		} else {
			$place_id = $_GET['place'];
			return $place_id;
		}
	}
	public function getContentFirst($place_id = 0) {
		$contentFirst = $this->place->getContentFirst($place_id);
		return $contentFirst;
	}
	public function getContentMid($place_id = 0) {
		$contentMid = $this->place->getContentMid($place_id);
		return $contentMid;
	}
	public function getContentEnd($place_id = 0) {
		$contentEnd = $this->place->getContentEnd($place_id);
		return $contentEnd;
	}

	public function getId($id = 0) {
		$getId = $this->place->getId($id);
		echo $getId;
	}
	public function getDescription($id = 0) {
		$getDescription = $this->place->getDescription($id);
		echo $getDescription;
	}
	public function getImage($id = 0) {
		$getImage = $this->place->getImage($id);
		echo $getImage;
	}
	public function getTitle($id = 0) {
		$getTitle = $this->place->getTitle($id);
		echo $getTitle;
	}
	public function getAddress($id = 0) {
		$getAddress = $this->place->getAddress($id);
		echo $getAddress;
	}
	public function getLink_map($id = 0) {
		$getLink_map = $this->place->getLink_map($id);
		echo $getLink_map;
	}
	public function getUser_Id($id = 0) {
		$getUser_Id = $this->place->getUser_Id($id);
		echo $getUser_Id;
	}

}
$aa = new PlaceController();
$aa->invoke();
