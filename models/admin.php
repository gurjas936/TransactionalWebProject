<?php

class Admin
{
	private $serverName = 'localhost';
	private $userName = 'root';
	private $password = '';
	private $database = 'project';
	public $con;

	//member functions

	// database connection
	public function __construct(){

		$this->con = mysqli_connect($this->serverName, $this->userName, $this->password, $this->database);
		if(mysqli_connect_error()){
			echo "not connected";
			trigger_error("failed to connect" . mysqli_connect_error());
		}
		else{
			return $this->con;
		}
  }


	public function checkCredentials($post){

		$username = $_POST['username'];
		$password = $_POST['password'];
    $found = false;
    $name = "";
		$query = "SELECT * FROM admin WHERE username='" . $username . "' AND
    password='" . $password . "' ";

		$sql = $this->con->query($query);
    $num = mysqli_num_rows($sql);

     if($num > 0) {
         $row = mysqli_fetch_array($sql);
         echo "helloo";
             $found = true;
             $name = $row["firstName"];
     }
     if ($found) {
       header("location:index1.php?name="  . urlencode($name));
     }
     else {
       echo "no records";
		}

	}

  public function insertCategories(){
    $category_title=$_POST['cat_title'];

    $select_query="Select * from `categories` where category_title='$category_title'";
    $result_select=mysqli_query($this->con, $select_query);
    $number=mysqli_num_rows($result_select);
      if($number>0){
        echo "<script>alert('This category is present inside the database') </script>";
      }
    $insert_query="insert into `categories` (category_title) values ('$category_title')";
    $result=mysqli_query($this->con, $insert_query);
    if($result) {
    echo "<script>alert('Category has been inserted successfully')</script>";
    }

  }


  public function insertBrands(){
    $brand_title=$_POST['brand_title'];

    $select_query="Select * from `brands` where brand_title='$brand_title'";
    $result_select=mysqli_query($this->con, $select_query);
    $number=mysqli_num_rows($result_select);
      if($number>0){
        echo "<script>alert('This brand is present inside the database') </script>";
      }
    $insert_query="insert into `brands` (brand_title) values ('$brand_title')";
    $result=mysqli_query($this->con, $insert_query);
    if($result) {
    echo "<script>alert('brand has been inserted successfully')</script>";
    }

  }


  public function displayBrands(){
    $select_brands="SELECT * from `brands`";
    $result_brands=mysqli_query($this->con, $select_brands);
    while($row_data=mysqli_fetch_assoc($result_brands)){
      $brand_title=$row_data['brand_title'];
      $brand_id=$row_data['brand_id'];

    echo  "<li class='nav-item'>
          <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
          </li>";

}
  }


  public function displayCategories(){
    $select_categories="SELECT * from `categories`";
    $result_categories=mysqli_query($this->con, $select_categories);
    while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];

    echo  "<li class='nav-item'>
          <a href='index.php?brand=$category_id' class='nav-link text-light'>$category_title</a>
          </li>";

    }
  }

  public function selectCategories(){
        $select_query="SELECT * from `categories`";
        $result_query=mysqli_query($this->con, $select_query);
        while($row=mysqli_fetch_assoc($result_query)){
          $category_title=$row['category_title'];
          $category_id=$row['category_id'];
          echo "<option value='$category_id'>$category_title</option>";
        }

  }

   public function selectBrands(){
        $select_query="SELECT * from `brands`";
        $result_query=mysqli_query($this->con, $select_query);
        while($row=mysqli_fetch_assoc($result_query)){
          $brand_title=$row['brand_title'];
          $brand_id=$row['brand_id'];
          echo "<option value='$brand_id'>$brand_title</option>";
        }

  }



  public function insertProducts($POST, $FILES){



  $product_title=$_POST['product_title'];
  $description=$_POST['description'];
  $product_keywords=$_POST['product_keywords'];
  $product_category=$_POST['product_category'];
  $product_brands=$_POST['product_brands'];
  $product_price=$_POST['product_price'];
  $product_status='true';

  //accessing images
  $product_image1=$_FILES['product_image1']['name'];
  $product_image2=$_FILES['product_image2']['name'];
  $product_image3=$_FILES['product_image3']['name'];

  //accessing image tmp name
  $temp_image1=$_FILES['product_image1']['tmp_name'];
  $temp_image2=$_FILES['product_image2']['tmp_name'];
  $temp_image3=$_FILES['product_image3']['tmp_name'];

  //checking empty condition
  if($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' or
    $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){

              echo"<script>alert('Please fill all the available fields')</script>";
        exit();


  }else{
            move_uploaded_file($temp_image1,"./product_images/product_image1");
            move_uploaded_file($temp_image2,"./product_images/product_image2");
            move_uploaded_file($temp_image3,"./product_images/product_image3");

            //insert query
            $insert_products="INSERT INTO `products` (product_title,product_description,product_keywords,category_id,brand_id,
            product_image1,product_image2,product_image3,product_price,date,status)VALUES('$product_title','$description',
            '$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3',
            '$product_price', NOW(),'$product_status')";
            $result_query=mysqli_query($this->con,$insert_products);
            if($result_query){
              echo"<script>alert('Successfully inserted the products')</script>";
            }
        }
  }
}


?>
