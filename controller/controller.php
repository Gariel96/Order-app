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
        $modelCat = $this->model = new Model();
    }
    public function getCatagory(){
        $modelCat = $this->model = new Model();
        if (!isset($_GET['cat'])) {
            //Lấy thông tin danh mục sản phẩm
            $cats = $modelCat->getCatagory();
            include 'view/catagorylist.php';
        }
    }

    function getItem(){
        if (!isset($_GET['item']))
        {
            //Nếu không có sp nào đc yêu cầu , hiển thị tất cả sp
            $items = $this->model->getItemList();
            include 'view/itemlist.php';
        }
        else
        {
            //hiện sp đc yêu cầu
            $items = $this->model->getItem($_GET['item']);
            include 'view/itemlist.php';
        }
    }

}
?>