<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Product Edit</title>
</head>
<body style="background-image: url('5.png');
            background-repeat:no-repeat;
            background-attachmenct: fixed;
            background-size:cover">
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header"style="background-image: url('6.png');
                        background-repeat:no-repeat;
                        background-attachmenct: fixed;
                        background-size:cover">
                    <center><div class="card mt-4">
                        <h4 style="margin:7px; background-color: #80471C; color: white;">Edit Records</div></center>
                            <br>
                                </h4>
                        
                    </div>
                    <div class="card-body" >
                    <div class="card-header" style=" 
                         background-image: url('6.png');
                         background-repeat: no-repeat; b
                         ackground-attachmenct: fixed; 
                         background-size:cover">
                        <?php
                        if(isset($_GET['id'])){

                            $product_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM product WHERE id='$product_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $product = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="product_id" value="<?= $product['id']; ?>">

                                    <div class="mb-3">
                                        <label>Product Name</label>
                                        <input type="text" name="name" value="<?=$product['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Unit </label>
                                        <input type="text" name="unit" value="<?=$product['unit'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="text" name="price" value="<?=$product['price'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Category</label>
                                        <input type="text" name="category" value="<?=$product['category'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <center><button type="submit" name="update_product" class="btn btn-primary" style="margin:2px; 
                                                                                                    font-size:15px; 
                                                                                                    text-align: center; 
                                                                                                    color: white;
                                                                                                    background-color: #795C34; ">Update Product
                                        
                                    </button>
                                    <a href="indexx.php" class="btn btn-danger float-end" style="margin:2px; 
                                                                                                    font-size:20px; 
                                                                                                    text-align: center; 
                                                                                                    color: white;
                                                                                                    background-color: #795C34; ">BACK</a>
                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>