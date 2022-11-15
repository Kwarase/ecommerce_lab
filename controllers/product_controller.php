<?php
//connect to the user account class
include("../classes/product_class.php");

//sanitize data
function cleanText($data) 
  {
    $data = trim($data);
    return $data;
  }



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

//--UPDATE--//
//update all brands
function update_all_brands_ctrl($bid, $bname){

  //creating instance
  $update_brand = new general_class();

  // return method
  $data = $update_brand -> update_brand_cls($bid, $bname);
    return $data;
}


/* CATEGORIES */
//insert
function add_category_ctrl($a){

  //creating an instance
  $add_category = new general_class();

  // return method
  return $add_category -> insert_category($a);
}

//--SELECT--//
//selecting one categories
function select_category_ctrl($cat_id){

  // creating instance
  $select_category = new general_class();

  // return method
  $data = $select_category -> select_one_category($cat_id);
    return $data;
}

//selecting all categories
function select_all_category_ctrl(){

  // creating instance
  $select_category = new general_class();

  // return method
  $data = $select_category -> select_category();
    return $data;
}

//--UPDATE--//
//update all categories
function update_all_category_ctrl($cat_id, $cat_name){

  //creating instance
  $update_category = new general_class();

  // return method
  return $update_category -> update_category_cls($cat_id, $cat_name);
  
}



?>
