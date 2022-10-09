<?php
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

    <title>Product View</title>
</head>
<body style="background-image: url('5.png');
            background-repeat:no-repeat;
            background-attachmenct: fixed;
            background-size:cover">

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"style=" 
                         background-image: url('6.png');
                         background-repeat: no-repeat; b
                         ackground-attachmenct: fixed; 
                         background-size:cover">
                        <center><div class="card mt-4"><h4 style="margin:7px; 
                                                                background-color: #80471C; 
                                                                color: white;">View Product Details
                        </div></center>

                       
                    </div>
                    <div class="card-body">
                    <div class="card-body" style=" 
                         background-image: url('6.png');
                         background-repeat: no-repeat; b
                         ackground-attachmenct: fixed; 
                         background-size:cover">

                        <?php
                            if(isset($_GET['id']))
                            {
                            $product_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM product WHERE id='$product_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $product = mysqli_fetch_array($query_run);
                        ?>
                                
                                    <div class="mb-3">
                                        <label>Product Name</label>
                                        <p class="form-control">
                                            <?=$product['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Unit</label>
                                        <p class="form-control">
                                            <?=$product['unit'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <p class="form-control">
                                            <?=$product['price'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Category</label>
                                        <p class="form-control">
                                            <?=$product['category'];?>
                                        </p>
                                        <br><center><a href="Product-vrecord.php" class="btn btn-primary float" style="margin:2px; 
                                                                                                    font-size:20px; 
                                                                                                    text-align: center; 
                                                                                                    color: white;
                                                                                                    background-color: #795C34; ">&nbsp;&nbsp;Back&nbsp;&nbsp;</a>
                                    </div>
                                    </div>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>