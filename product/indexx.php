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

    <title>Product </title>
    
</head>
<body style="background-image: url('5.png');
            background-repeat:no-repeat;
            background-attachmenct: fixed;
            background-size:cover">
            <br>
            
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"style="background-image: url('6.png');
                        background-repeat:no-repeat;
                        background-attachmenct: fixed;
                        background-size:cover">
                        <center><div class="card mt-4"><h4 style="margin:7px; 
                                                                background-color: #80471C; 
                                                                color: white;">Product Details
                        </div></center>

                        <br><a href="Product-create.php" class="btn btn-primary float-end" style="margin:2px; 
                                                                                                    font-size:15px; 
                                                                                                    text-align: center; 
                                                                                                    color: white;
                                                                                                    background-color: #795C34; ">Add Product</a>
                        <a href="Product-vrecord.php" class="btn btn-primary float-end" style="margin:2px; font-size:15px; text-align: center; color: white;
                                background-color: #795C34; ">View All Product Records</a>
                            
                        <form action="" method="GET">
                            <div class="input-group mb-3" style ="height: 20px; width: 45%;">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search product" style="margin:2px;">
                                        
                                        <button type="submit" class="btn btn-primary"style="margin:2px; font-size:15px; text-align: center;color: white;
                                            background-color: #795C34; ">Search</button></br>
                                        
                            </div>
                        </form>
                        <div class="col-md-12">
                            <div class="card mt-4">
                               <div class="card-header"style=" 
                                        background-image: url('6.png');
                                        background-repeat: no-repeat;
                                        background-attachmenct: fixed; 
                                        background-size:cover">
                                <table class="table table-bordered">
                                <thead>
                                <tr>
                                <th style="font-size:20px; text-align: center;">ID</th>
                                    <th style="font-size:20px; text-align: center;">Product Name</th>
                                    <th style="font-size:20px; text-align: center;">Unit</th>
                                    <th style="font-size:20px; text-align: center;">Price</th>
                                    <?php 
                                    $con = mysqli_connect("localhost","root",'',"group5");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM product WHERE CONCAT(name,unit,price) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td style="text-align: center;"><?= $items['id']; ?></td>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['unit']; ?></td>
                                                    <td style="text-align: center;"><?= $items['price']; ?></td>
                                                    
                                                
                                                
                                                </tr>
                                                    <?php
                                                        }
                                                        }
                                                        else
                                                        {
                                                    ?>
                                                        <tr>
                                                            <td colspan="4">No Record Found</td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    }
                                                    ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </h4>
                                </div>
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
