<?php
include('./../../models/admin.php');
$adminObj = new Admin();

if(isset($_POST['insert_brands'])) {

     $adminObj->insertBrands();
}

?>




<form action="" method="post" class="mb-2 my-3">
  <div class="input-group w-90 mb-2">
      <span class="input-group-text bg-info" id="basic-addon1"><i
      class="fa-solid fa-receipt"></i></span>
      <input type="text" class="form-control" name="brand_title"
      placeholder="Insert brands" aria-label="Username"
      aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2">
    <input type="submit" name="insert_brands"
    value="Insert Brands" aria-label="Username"
    aria-describedby="basic-addon1" class="bg-info bg-info p-2 my-3 border-0">
  </div>
</form>
