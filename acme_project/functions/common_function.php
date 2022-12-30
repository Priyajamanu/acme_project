<?php
// include('./includes/connect.php');

function getproducts(){
    global $con;

    //condition to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){


    $select_query="Select * from `products` order by rand() limit 0,9";
    $result_query=mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_price=$row['product_price'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
        <img src='./Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>Price:$product_price</p>
          <a href='home.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
          <a href='product_details.php?product_id=$product_id' 
          class='btn btn-success'>View More</a>
        </div>
      </div>
    </div>";  
    }     
}
}
}

function get_all_products(){
  global $con;

    //condition to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){


    $select_query="Select * from `products` order by rand() limit 0,3";
    $result_query=mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
        <img src='./Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>Price:$product_price</p>
          <a href='home.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
          <a href='product_details.php?product_id=$product_id' 
          class='btn btn-success'>View More</a>
        </div>
      </div>
    </div>";  
    }     
}
}

}
function get_unique_categories(){
  global $con;

    //condition to check isset or not
    if(isset($_GET['category'])){
      $category_id=$_GET['category'];
    $select_query="Select * from `products` where category_id=$category_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
    }
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
        <img src='./Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p><p class='card-text'>Price:$product_price</p>

          <a href='home.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
          <a href='product_details.php?product_id=$product_id' 
          class='btn btn-success'>View More</a>
        </div>
      </div>
    </div>";  
    }     
}
}

function get_unique_brands(){
  global $con;

    //condition to check isset or not
    if(isset($_GET['brand'])){
      $brand_id=$_GET['brand'];
    $select_query="Select * from `products` where brand_id=$brand_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h2 class='text-center text-danger'>No stock for this brand</h2>";
    }
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
        <img src='./Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>Price:$product_price</p>
          <a href='home.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
          <a href='product_details.php?product_id=$product_id' 
          class='btn btn-success'>View More</a>
        </div>
      </div>
    </div>";  
    }     
}
}



function getbrands(){
    global $con;
    $select_brands = "Select * from `brands`";
                $result_brands=mysqli_query($con,$select_brands);
                while($row_data=mysqli_fetch_assoc($result_brands)){
                  $brand_title=$row_data['brand_title'];
                  $brand_id=$row_data['brand_id'];
                  echo "<li class='nav-item '>
                  <a href='home.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                </li>";
                }
}

function getcategories(){
    global $con;
    $select_categories = "Select * from `categories`";
                $result_categories=mysqli_query($con,$select_categories);
                // $row_data=mysqli_fetch_assoc($result_brands);
                // echo $row_data['brand_title'];
                while($row_data=mysqli_fetch_assoc($result_categories)){
                  $category_title=$row_data['category_title'];
                  $category_id=$row_data['category_id'];
                  echo "<li class='nav-item '>
                  <a href='home.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                </li>";
                }

}

//search products

function search_product(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data_value = $_GET['search_data'] ;
  
    $search_query = "Select * from `products` where product_keywords like '%$search_data_value%'";
    $result_query=mysqli_query($con,$search_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
        <img src='./Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>Price:$product_price</p>
          <a href='home.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
          <a href='product_details.php?product_id=$product_id' 
          class='btn btn-success'>View More</a>
        </div>
      </div>
    </div>";  
    }     
}
}


function view_details(){
  global $con;

    //condition to check isset or not
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
          $product_id=$_GET['product_id'];
    $select_query="Select * from `products` where product_id=$product_id";
    $result_query=mysqli_query($con,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_image2=$row['product_image2'];
      $product_image3=$row['product_image3'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
        <img src='./Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>Price:$product_price</p>
          <a href='home.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
          <a href='home.php?product_id=$product_id' 
          class='btn btn-success'>Go home</a>
        </div>
      </div>
    </div>
    <div class='col-md-8'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <h4 class='text-center text-success mb-5'>Related Products</h4>
                        </div>
                        <div class='col-md-6'>
                        <img src='./Admin/product_images/$product_image2' class='card-img-top' alt='$product_title'>

                        </div>
                        <div class='col-md-6'>
                        <img src='./Admin/product_images/$product_image3' class='card-img-top' alt='$product_title'>
                        </div>
                    </div>
                        <!-- related images -->
                </div>";  
    }     
}
}
}
}

//ip address
  
    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  
 
//cart
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $get_ip_address = getIPAddress();  
  $get_product_id=$_GET['add_to_cart'];

  $select_query = "Select * from `cart_details` where ip_address='$get_ip_address' and product_id=$get_product_id";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows>0){
      echo "<script>alert('This item is already present inside cart')</script>";
      echo "<script>window.open('home.php','_self')</script>";
    }else{
      $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_address',0)";
      $result_query=mysqli_query($con,$insert_query);
      echo "<script>alert('Item is added to cart')</script>";
      echo "<script>window.open('home.php','_self')</script>";
    }
}
}


function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $con;
  $get_ip_address = getIPAddress();
  $select_query = "Select * from `cart_details` where ip_address='$get_ip_address'";
  $result_query=mysqli_query($con,$select_query);
  $count_cart_items=mysqli_num_rows($result_query);
    }else{
      global $con;
    $get_ip_address = getIPAddress();
    $select_query = "Select * from `cart_details` where ip_address='$get_ip_address'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    }
  echo $count_cart_items;
  }




?>