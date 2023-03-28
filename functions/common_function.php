<?php



	$serverName = 'localhost';
	$userName = 'root';
	$password = '';
	$database = 'project';
	$con;

	//member functions

	// database connection

		$con = mysqli_connect($serverName, $userName, $password, $database);
		if(mysqli_connect_error()){
			echo "not connected";
			trigger_error("failed to connect" . mysqli_connect_error());
		}
		else{
			return $con;
		}
  


//getting products
function getproducts(){


global $con;

//condition to check isset or not
if(!isset($_GET['category'])){

  if(!isset($_GET['brand'])){

        $select_query="SELECT * FROM `products` order by rand()";
        $result_query=mysqli_query($con, $select_query);
       
        while($row=mysqli_fetch_assoc($result_query)){
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_keywords=$row['product_keywords'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            $product_image1=$row['product_image1'];
            echo "<div class='col-md-4 mb-2'>
              <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-info'>Add to cart</a>
                    <a href='#' class='btn btn-secondary'>View More</a>
                  </div>
              </div>
            </div>";
        }

    

}
}
}

//getting unique categories
function get_unique_categories(){


  global $con;

if(isset($_GET['category'])){

        $category_id=$_GET['category'];
          
        $select_query="SELECT * FROM `products` where category_id=$category_id";
        $result_query=mysqli_query($con, $select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
          echo "<h2 class='text-center text-danger'>No stock for this category</h2>";

        }
       
        while($row=mysqli_fetch_assoc($result_query)){
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_keywords=$row['product_keywords'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            $product_image1=$row['product_image1'];
            echo "<div class='col-md-4 mb-2'>
              <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-info'>Add to cart</a>
                    <a href='#' class='btn btn-secondary'>View More</a>
                  </div>
              </div>
            </div>";
        }

    

}
}


//getting unique brands
function get_unique_brands(){


  global $con;

if(isset($_GET['brand'])){

        $brand_id=$_GET['brand'];
          
        $select_query="SELECT * FROM `products` where brand_id=$brand_id";
        $result_query=mysqli_query($con, $select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
          echo "<h2 class='text-center text-danger'>No stock for this brand</h2>";

        }
       
        while($row=mysqli_fetch_assoc($result_query)){
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_keywords=$row['product_keywords'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            $product_image1=$row['product_image1'];
            echo "<div class='col-md-4 mb-2'>
              <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-info'>Add to cart</a>
                    <a href='#' class='btn btn-secondary'>View More</a>
                  </div>
              </div>
            </div>";
        }

    

}
}

// searching products function

function search_product(){
  
global $con;

       
         if(isset($GET['search_data_product'])){

         $search_data_value=$_GET['search_data'];
             
        $search_query="Select * from 'products' where product_keywords like '%$search_data_value%'";
        
        $result_query=mysqli_query($con, $search_query);
        $num_of_rows=mysqli_num_rows($result_query);
        echo '$num_of_rows rrrrrrrrr';
        if($num_of_rows==0){
          
          echo "<h2 class='text-center text-danger'>No results match</h2>";

        }
       
        while($row=mysqli_fetch_assoc($result_query)){
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_keywords=$row['product_keywords'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            $product_image1=$row['product_image1'];
            echo "<div class='col-md-4 mb-2'>
              <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-info'>Add to cart</a>
                    <a href='#' class='btn btn-secondary'>View More</a>
                  </div>
              </div>
            </div>";
        }

    

}
}




?>