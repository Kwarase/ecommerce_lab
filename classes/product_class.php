<?php
//connect to database class
require("../settings/db_class.php");

/**
*Product class to handle all product functions 
*/
/**
 *@author Emmanuel Kwarase
 *
 */

class general_class extends db_connection
{
	//--INSERT--//

	function insert_brand($a){

		$sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$a')";

		return $this -> db_query($sql);
	}

	//--SELECT--//
	//Select all
	function select_brand(){
		$sql =" SELECT * FROM `brands`";

		return $this -> db_fetch_all($sql);
	}

	//Select one
	function select_one_brand($bid){
		$sql =" SELECT * FROM `brands` WHERE `brand_id` = '$bid'";

		return $this -> db_fetch_one($sql);
	}
	
	//--UPDATE--//
	function update_brand_cls($bid, $bname){
		$sql = "UPDATE brands SET brand_name = '$bname' WHERE brand_id = $bid";
	
		return $this -> db_query($sql);
		}
		
	/* CATEGORIES */

	//--INSERT--//

	function insert_category($a){

		$sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$a')";

		return $this -> db_query($sql);
	}

	//--SELECT--//
	//Select all
	function select_category(){
		$sql =" SELECT * FROM `categories`";

		return $this -> db_fetch_all($sql);
	}

	//Select one
	function select_one_category($cat_id){
		$sql =" SELECT * FROM `categories` WHERE `cat_id` = '$cat_id'";

		return $this -> db_fetch_one($sql);
	}

	//--UPDATE--//
	function update_category_cls($cat_id, $cat_name){
	$sql = "UPDATE categories SET cat_name = '$cat_name' WHERE cat_id = $cat_id";

	return $this -> db_query($sql);
	}




}
?>
