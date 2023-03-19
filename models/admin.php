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
      $category_title=$row_data['brand_title'];
      $category_id=$row_data['brand_id'];

    echo  "<li class='nav-item'>
          <a href='index.php?brand=$category_id' class='nav-link text-light'>$category_title</a>
          </li>";

}
  }


}


?>
