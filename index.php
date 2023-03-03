<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
    <h2><i>Online Shopping Day</i></h2>
    <img src="./assets/images/banner.png" alt="" >
    <h2><i>Special Promotion</i></h2>
    <img src="./assets/images/banner2.png" alt="" >
    <h2><i><ion-icon name="logo-apple"></ion-icon> iPhone</i></h2> 
    <div class="container w-100">
        <div class="row h-100">
            <?php
            require("config/config.php");
            $sql = "SELECT * FROM products WHERE details = 'iphone' LIMIT 4";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($query)){
            ?>
        
                <div class="col-lg-3 mx-0" >
                <form action="" method="POST">
                    <div class="card d-flex justify-content-start h-100" style="width: 19.5rem;">
                    <img src="./assets/images/<?= $row['image'] ?>" style="width:200px;height:200px" class="card-img-top h-100" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['name'] ?></h5>
                        <p class="card-text">$<?= $row['price'] ?></p>
                        <button type="submit" class="btn btn-info" name="addtocart">Add to cart</button>
                    </div>
                    </div>
                </form>
                </div>
            <?php }?>
        </div>
    </div>
    <h2><i> Samsung</i></h2> 
    <div class="container w-100">
        <div class="row h-100">
            <?php
            require("config/config.php");
            $sql = "SELECT * FROM products WHERE details = 'samsung'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($query)){
            ?>
        
                <div class="col-lg-3 mx-0" >
                <form action="" method="POST">
                    <div class="card d-flex justify-content-start h-100" style="width: 19.5rem;">
                    <img src="./assets/images/<?= $row['image'] ?>" style="width:200px;height:200px" class="card-img-top h-100" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['name'] ?></h5>
                        <p class="card-text">$<?= $row['price'] ?></p>
                        <button type="submit" class="btn btn-info" name="addtocart">Add to cart</button>
                    </div>
                    </div>
                </form>
                </div>
            <?php }?>
        </div>
    </div>
    <h2><i><ion-icon name="laptop-outline"></ion-icon> Macbook</i></h2> 
    <div class="container w-100">
        <div class="row h-100">
            <?php
            require("config/config.php");
            $sql = "SELECT * FROM products WHERE details = 'macbook'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($query)){
            ?>
        
                <div class="col-lg-3 mx-0" >
                <form action="" method="POST">
                    <div class="card d-flex justify-content-start h-100" style="width: 19.5rem;">
                    <img src="./assets/images/<?= $row['image'] ?>" style="width:200px;height:200px" class="card-img-top h-100" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['name'] ?></h5>
                        <p class="card-text">$<?= $row['price'] ?></p>
                        <button type="submit" class="btn btn-info" name="addtocart">Add to cart</button>
                    </div>
                    </div>
                </form>
                </div>
            <?php }?>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>