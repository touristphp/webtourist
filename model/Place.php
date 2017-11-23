<?php
include_once '../controller/database/ConnectDatabase.php';
class Place extends ConnectDatabase {
	private $id;
	private $title;
	private $description;
	private $contentFirst;
	private $contentMid;
	private $contentEnd;
	private $image;
	private $address;
	private $link_map;
	private $user_id;
	/**
	 * @return mixed
	 */
	public function getConnect() {
		$connect = $this->connect();
		return $connect;
	}
	/**
	 * @return mixed
	 */
	public function getArrayData() {
		$connect = $this->connect();
		$data    = $connect->query("SELECT * FROM place");
		return $data;
	}
	/**
	 * @return mixed
	 */
	public function getId($id = 0) {
		//  $this->id = $this->getConnect()->query("SELECT id FROM blog LIMIT 1");
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->id = $value['id'];
			}
		}
		return $this->id;
	}
	public function getValueIdInURL($user_id) {
	}
	/**
	 * @return mixed
	 */
	public function getContentFirst($id = 0) {
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->contentFirst = $value['content_first'];
			}
		}
		return $this->contentFirst;
	}
	/**
	 * @return mixed
	 */
	public function getContentMid($id = 0) {
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->contentMid = $value['content_mid'];
			}
		}
		return $this->contentMid;
	}
	/**
	 * @return mixed
	 */
	public function getContentEnd($id = 0) {
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->contentEnd = $value['content_end'];
			}
		}
		return $this->contentEnd;
	}

	/**
	 * @return mixed
	 */
	public function getDescription($id = 0) {
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->description = $value['description'];
			}
		}
		return $this->description;
	}
	/**
	 * @return mixed
	 */
	public function getImage($id = 0) {
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->image = $value['image'];
			}
		}
		return $this->image;
	}

	/**
	 * @return mixed
	 */
	public function getUser_id($id = 0) {
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->user_id = $value['user_id'];
			}
		}
		return $this->user_id;
	}
	/**
	 * @return mixed
	 */
	public function getTitle($id = 0) {
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->title = $value['title'];
			}
		}
		return $this->title;
	}

	/**
	 * @return mixed
	 */
	public function getLink_map($id = 0) {
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->link_map = $value['link_map'];
			}
		}
		return $this->link_map;
	}

	/**
	 * @return mixed
	 */
	public function getAddress($id = 0) {
		$valueFormQuery = $this->getArrayData();
		foreach ($valueFormQuery as $key => $value) {
			if ($key == $id) {
				$this->address = $value['address'];
			}
		}
		return $this->address;
	}

}
?>