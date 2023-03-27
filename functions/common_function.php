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



?>