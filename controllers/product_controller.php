<?php
//connect to the user account class
include("../classes/product_class.php");

// //sanitize data
// function cleanText($data) 
// {
//   $data = trim($data);
//   //$data = stripslashes($data);
//   //$data = htmlspecialchars($data);
//   return $data;
// }



//--INSERT--//

// BRAND
function add_brand_ctrl($a){

  //creating an instance
  $add_brand = new general_class();

  // return method
  return $add_brand -> insert_brand($a);
}

//--SELECT--//
//selecting one brand
function select_brand_ctrl($bid){

  // creating instance
  $select_brand = new general_class();

  // return method
  $data = $select_brand -> select_one_brand($bid);
    return $data;
}

//selecting all brands
function select_all_brands_ctrl(){

  // creating instance
  $select_brand = new general_class();

  // return method
  $data = $select_brand -> select_brand();
    return $data;
}



?>
