<?php
include('./models/admin.php');
         $adminObj = new Admin();

$name = $_GET["name"];
// $product_title = $_GET['product_title'];
// $product_description = $_GET['product_description'];
// $product_keywords = $_GET['product_keywords'];
// $category_id = $_GET['category_id'];
// $brand_id = $_GET['brand_id'];
// $product_image1 = $_GET['product_image1'];

 ?>

<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">

    <li class="nav-item">
          <a class="nav-link" href="#">Welcome <b><?php echo $name ?></b></a>
    </li>
    <!-- <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
    </li> -->
  </ul>
</nav>

<!--third child-->
<div class="bg-light">
  <h3 class="text-center">BUY YOUR GADGETS</h3>
  <p class="text-center">Buy your Electronic products here</p>
</div>


<!--fourth child-->
<div class="row container-fluid">
  <div class="col-md-10 ">
   <!--products-->
   <div class="row">
 <?php

        $select_query="SELECT * FROM `products`";
        $result_query=mysqli_query($adminObj->con, $select_query);
       
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
    ?>
    </div>
  </div>
  <div class="col-md-2 bg-secondary p-0 justify-content-end">
<!--side nav-->

<!--brands-->
<ul class="navbar-nav me-auto text-center justify-content-end">
  <li class="nav-item bg-info">
    <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
  </li>

       <div class="container">
         <?php

            $adminObj->displayBrands();

        ?>
      </div>

</ul>

<!--categories-->

<ul class="navbar-nav me-auto text-center">
  <li class="nav-item bg-info">
    <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
  </li>


  <div class="container">
    <?php

       $adminObj->displayCategories();

   ?>
 </div>
</ul>


  </div>
</div>
