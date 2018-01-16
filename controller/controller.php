<?php 
include_once 'model/Model.php';

/**
* 
*/
class Controller 
{
	public $model;
	public function __construct()
	{
		$this->model = new Model();
	}
	public function invoke(){

		if (!isset($_GET['cat'])) {
			//Lấy thông tin danh mục sản phẩm
			$cats = $this->model->getCatagory();
			include 'view/catagorylist.php';
		}
		/*if (!isset($_GET['item']))
		{
			//Nếu không có sp nào đc yêu cầu , hiển thị tất cả sp
			$items = $this->model->getItemList();
			include 'view/itemlist.php';
		}
		else
		{
			//hiện sp đc yêu cầu
			$item = $this->model->getItem($_GET['item']);
			include 'view/viewItem.php';
		}*/
	}

}
 ?>