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
                <div class="card-header"style=" 
                                        background-image: url('6.png');
                                        background-repeat: no-repeat;
                                        background-attachmenct: fixed; 
                                        background-size:cover">
                        <center><div class="card mt-4"><h4 style="margin:7px; 
                            background-color: #80471C; color: white;">All Product Records</div></center>
                            <a href="indexx.php" class="btn btn-danger float-end" style="margin:2px; color: white;
                                    background-color: #795C34;">Back</a></center></div>
                            
                           <br>
                                    <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body" style=" 
                                        background-image: url('6.png');
                                        background-repeat: no-repeat;
                                        background-attachmenct: fixed; 
                                        background-size:cover">
                       
</tr> <div class="card-body" >

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th style="margin:2px; font-size:15px; text-align: center; color: black;">ID</th>
            <th style="margin:2px; font-size:15px; text-align: center; color: black;">Product Name</th>
            <th style="margin:2px; font-size:15px; text-align: center; color: black;">Unit</th>
            <th style="margin:2px; font-size:15px; text-align: center; color: black;">Price</th>
            <th style="margin:2px; font-size:15px; text-align: center; color: black;">Action</th>

            <?php 
            
            $query = "SELECT * FROM product";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $product)
                {
                    ?>
                    <tr>
                        <td style="text-align: center;"><?= $product['id']; ?></td>
                        <td><?= $product['name']; ?></td>
                        <td><?= $product['unit']; ?></td>
                        <td style="text-align: center;"><?= $product['price']; ?></td>
            
                        <td>
                            <center><a href="product-view.php?id=<?= $product['id']; ?>" class="btn btn-info btn-sm">View</a>
                            <a href="product-edit.php?id=<?= $product['id']; ?>" class="btn btn-success btn-sm">Update</a>
                            <form action="code.php" method="POST" class="d-inline">
                                <button type="submit" name="delete_product" value="<?=$product['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
            }
            else
            {
                echo "<h5> No Record Found </h5>";
            }
        ?>
        
    </tbody>
</table>

</div>
                            </thead>
                            <tbody>
                                <tbody>
                                
                            </tbody>
                            

                        </h4>
                    </div>
                    
                </div>
            </div>
            
        </div>
    
                    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>