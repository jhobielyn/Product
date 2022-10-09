<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Product Create</title>
</head>
<body style="background-image: url('5.png');
            background-repeat:no-repeat;
            background-attachmenct: fixed;
            background-size:cover">
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-header"style="background-image: url('6.png');
                        background-repeat:no-repeat;
                        background-attachmenct: fixed;
                        background-size:cover">
                    <center><div class="card mt-4"><h4 style="margin:7px; background-color: #80471C; color: white;">Add Records</div></center>
                            <a href="indexx.php" class="btn btn-danger float-end" style="margin:2px; color: white;
                                    background-color: #795C34;">Back</a></center>
                                </h4>
                        </div>
                                <div class="card-body">
                                    <div class="card-header"style=" 
                                        background-image: url('6.png');
                                        background-repeat: no-repeat;
                                        background-attachmenct: fixed; 
                                        background-size:cover">
                                        <form action="code.php" method="POST" >

                                            <div class="mb-3">
                                                <label>Product Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Unit</label>
                                                <input type="text" name="unit" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Price</label>
                                                <input type="text" name="price" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Category</label>
                                                <input type="text" name="category" class="form-control">
                                            </div>
                                            
                                            <div class="mb-3">
                                            <center><button type="submit" name="save_product" class="btn btn-primary">Save Product</button>
                                        </form>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>