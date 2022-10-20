<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*Customer class to handle all customer functions 
*/
/**
 *@author Emmanuel Kwarase
 *
 */

class customer_class extends db_connection
{
	//--INSERT--//
	function insert_customer($a, $b, $c, $d, $e, $f)
	{
		$sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`) VALUES ('$a','$b','$c','$d','$e', '$f')";

		return $this->db_query($sql);
	}



	//--UPDATE--//



	//--DELETE--//
	

}

?>