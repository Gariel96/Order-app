<?php 
	
	/**
	* 
	*/
 	class Catagory 
		{
		 	public $id_cat;
		 	public $cat;
		 	public function __construct($id_cat,$cat)
		 	{
		 		$this->id_cat = $id_cat;
		 		$this->cat = $cat;
		 	}
		}

 	/**
	* 
	*/
	class Item 
		{
			public $id_item;
			public $name_item;
			public $id_cat;
			public $des_item;
			public $price_item;	
			
			public function __construct($id_item,$name_item,$id_cat,$des_item,$price_item)
			{
				$this->id_item = $id_item;
				$this ->name_item = $name_item;
				$this->id_cat = $id_cat;
				$this ->des_item =$des_item;
				$this ->price_item = $price_item;

			}
		}		

?>