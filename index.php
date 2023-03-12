<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using PHP and MySQL</title>
    <!--Bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--css file-->
<!-- <link rel="stylesheet" href="style.css"> -->
<style>
    .logo{
        width:7%;
        height:7%;
    }
    .card-img-top{

        width: 100%;
        height: 200px;
        object-fit: contain;
    }
</style>
</head>
<body>

<!--Navbar-->
  <div class="container-fluid p-0">
    <div>
      <div>
          <?php
              # inlude Navbar
              include_once('./partials/navbar.php');
          ?>
      </div>
    </div>

    <main>
            <?php
                # inlude content here
                if(!(isset($_GET['page']))){
                    include_once('./screens/home.php');
                }
                else
                {
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'home':
                            # code...
                            include_once('./views/home.php');
                            break;
                        case 'about':
                            # code...
                            include_once('./views/about.php');
                            break;
                        case 'contact':
                            # code...
                            include_once('./views/contact.php');
                            break;
                        case 'customers':
                            # code...
                            include_once('./views/customers.php');
                            break;
                        default:
                            # code...
                            echo "<h4 style='text-align:center; color:red'>404: Oops page not found...</h4>";
                            break;
                    }
                }
            ?>
        </main>

      <div>
          <?php
              # inlude Navbar
              include_once('./partials/footer.php');
          ?>
      </div>
  </div>

<!--Bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
