<?php
include_once 'model/Class.php';
require_once 'config/dbconfig.php';
/**
 *
 */
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT 	ID_CAT, CAT FROM catagory ORDER BY ID_CAT';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

class Model
{
    public function getItemList()
    {
        //test data, thực tế sử dụng câu lệnh truy vấn sql
        global $pdo;
        $getItem = 'SELECT * FROM `item`';
        return $q = $pdo->query($getItem);
    }

    public function getItem($idCat)
    {
        //Lấy dữ liệu từ getitemlist
        global $pdo;
        $getItem = 'SELECT * FROM `item` WHERE `ID_CAT` = $idCat';
        return $q = $pdo->query($getItem);
    }

    public function getCatagory()
    {
        global $pdo;
        $sql = 'SELECT * FROM `catagory`';
        return $q = $pdo->query($sql);
    }
}

?>