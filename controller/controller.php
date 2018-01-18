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
        /** @noinspection PhpUnusedLocalVariableInspection */
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

    function getItem()
    {
        $modelCat = $this->model = new Model();
        if (!isset($_GET['item'])) {
            //Nếu không có sp nào đc yêu cầu , hiển thị tất cả sp
            $items = $this->model->getItemList();
            include 'view/itemlist.php';
        } else {
            $idCat = $_GET['item'];
            //hiện sp đc yêu cầu
            $items = $modelCat->getItem($idCat);

            include 'view/itemlist.php';
        }
    }

}

?>