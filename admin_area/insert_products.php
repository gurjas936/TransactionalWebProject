<?php
	include('./../models/admin.php');
	$adminObj = new Admin();
    if(isset($_POST['insert_product'])){


	$product_title=$POST['product_title'];
	$description=$POST['description'];
	$product_keywords=$POST['product_keywords'];
	$product_brands=$POST['product_brands'];
	$product_price=$POST['product_price'];
	$product_status='true';

	//accessing images
	$product_image1=$FILES['product_image1']['name'];
	$product_image2=$FILES['product_image2']['name'];
	$product_image3=$FILES['product_image3']['name'];

	//accessing image tmp name
	$temp_image1=$FILES['product_image1']['tmp_name'];
	$temp_image2=$FILES['product_image2']['tmp_name'];
	$temp_image3=$FILES['product_image3']['tmp_name'];

	//checking empty condition
	if($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){

              echo"<script>alert('Please fill all the available fields')</script>";
			  exit();


	}else{
            move_uploaded_file($temp_image1,"./product_images/product_image1");
			move_uploaded_file($temp_image2,"./product_images/product_image2");
			move_uploaded_file($temp_image3,"./product_images/product_image3");

			//insert query
			$insert_products="insert into 'products'(product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status)values('$product_title','$description','$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
			$result_query=mysqli_query($con,$insert_products);
			if($result_query){
				echo"<script>alert('Successfully inserted the products')</script>";
			}

	}


	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert products</title>
	 <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
    font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO@HhonpyAIVpjrylPvoDwi PUiKdWk5t3PyolY1c0d4
    DSEØGa+ri4Au TroPR5aQvXU9xC6q0PnzFeg==" crossorigin="anonymous"
    referrerpolicy="no-referrer"/>


<link rel="stylesheet" href="../style.css">
</head>
<body>

	<div class="container mt-3">
		<h1 class="text-center">Insert Products</h1>
			<!-- form -->
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_title" class="form-label">Product
				title</label>
				<input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off"
				required="required">
			</div>

			<!-- description -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="description" class="form-label">Product
				description</label>
				<input type="text" name="description" id="description"
					class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
			</div>

			<!-- keywords -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_keywords" class="form-label">Product
				Keywords</label>
				<input type="text" name="product_keywords"
				id="product_keywords" class="form-control"
				placeholder="Enter product keywords" autocomplete="off"
				required="required">
			</div>

			<!-- categories -->
			<div class="form-outline mb-4 w-50 m-auto">

				<select name="product_category" id="" class="form-select">
					<option value="">Select a Category</option>
					<?php	$adminObj->selectCategories(); ?>

				</select>
			</div>

			<!-- Brands -->
			<div class="form-outline mb-4 w-50 m-auto">
				<select name="product_brands" id="" class="form-select">
					<option value="">Select a Brands</option>
					<?php	$adminObj->selectBrands(); ?>

				</select>
			</div>

			<!-- Image 1 -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_image1" class="form-label">Product image 1</label>
				<input type="file" name="product_image1" id="product_image1" class="form-control"
				required="required">
			</div>

			<!-- Image 2 -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_image2" class="form-label">Product image 2</label>
				<input type="file" name="product_image2" id="product_image2" class="form-control"
				required="required">
			</div>

			<!-- Image 3 -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_image3" class="form-label">Product image 3</label>
				<input type="file" name="product_image2" id="product_image3" class="form-control"
				required="required">
			</div>

			<!-- Price -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_price" class="form-label">Product
				price</label>
				<input type="text" name="product_price" id="product_price" class="form-control"placeholder="Enter product price" autocomplete="off"
				required="required">
			</div>

			<!-- Price -->
			<div class="form-outline mb-4 w-50 m-auto">
				<input type="submit" name="insert_product" class="btn btn-info" value="Insert Products">
			</div>

		</form>
</div>

</body>
</html>
