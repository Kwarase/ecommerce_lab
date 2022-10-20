<?php
//connect to the user account class
include("../classes/customer_class.php");



//--INSERT--//
function add_customer_ctrl($a, $b, $c, $d, $e, $f){

// creating an instance
  $add = new customer_class();

// return method
  return $add -> insert_customer($a, $b, $c, $d, $e, $f);
}


  
?>
