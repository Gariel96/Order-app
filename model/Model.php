<?php 
	include_once 'model/Class.php';	
	require_once 'config/dbconfig.php';
	/**
	* 
	*/
	try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  
    $sql = 'SELECT 	ID_CAT,
                    CAT
               FROM catagory
              ORDER BY ID_CAT';
  
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
	}	catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
	}

	class Model 
	{
		public function getItemList()
		{
			//test data, thực tế sử dụng câu lệnh truy vấn sql
					
		}

		public function getItem($name)
		{
			//Lấy dữ liệu từ getitemlist
			$allItems = $this ->getItemList();
			return $allItems[$name];
		}

		public function getCatagory()
		{
			/*$sql ='SELECT CAT,
										ID_CAT';
			$q = $conn->query($sql);
			$q = setFetchMode(PDO::FETCH_ASSOC);*/
			return array(
				"sachs" => new Catagory ("01","Sách"),
				"Vở" => new Catagory ("02","Vở"),
				"Bút" => new Catagory ("03","Bút")
			);
		}
	}

 ?>