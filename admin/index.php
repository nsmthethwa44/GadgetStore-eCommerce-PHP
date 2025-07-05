<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store System</title>
     <link rel="stylesheet" href="../assets/css/all.css">
      <link rel="stylesheet" href="../assets/css/all.min.css">
      <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="main">
        <!-- sidebar  -->
      <?php include("../includes/templates/admin/sidebar.php");?>

      <div class="main-content">
        <!-- header  -->
        <?php include("../includes/templates/admin/header.php");?>
      
        <div class="overview">
            <!-- <div class="title"><h3>Dashboard</h3></div> -->

            <div class="content">
                <div class="container-box">
                    <div class="box">
                      <i class="fa-solid fa-database"></i>
                        <div class="text">
                            <p>Lorem Ipsum</p>
                            <h4>3</h4>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                        <div class="text">
                            <p>No. Of Category(s)</p>
                            <h4>3</h4>
                        </div>
                    </div>
                    <div class="box">
                       <i class="fa-solid fa-people-group"></i>
                        <div class="text">
                            <p>No. Of Suppliers</p>
                            <h4>3</h4>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-user"></i>
                        <div class="text">
                            <p>No. Of User</p>
                            <h4>3</h4>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-display"></i>
                        <div class="text">
                            <p>System IP Address</p>
                            <h4>3</h4>
                        </div>
                    </div>
                    <div class="box">
                       <i class="fa-solid fa-key"></i>
                        <div class="text">
                            <p>Last Login</p>
                            <h4>3</h4>
                        </div>
                    </div>
                </div>

              <div class="products-content">
                <div class="table-title">
                    <h3>Recent Added Items</h3>
                </div>

                  <div class="table-container">
                    <div class="table-content">
                        <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                 <th>Price</th>
                                <th>Description</th>
                                <th>Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                          include("../includes/db.php");
                          $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 12";
                          $results = mysqli_query($conn, $sql);
                          while($data = mysqli_fetch_array($results)){
                          ?>
                            <tr>
                               <td><?php echo $data['id']; ?></td>
                              <td><img src="../<?php echo $data['photo']; ?>" alt="" class="image"></td>
                              <td><?php echo $data['title']; ?></td>
                              <td><?php echo $data['category']; ?></td>
                              <td><strong>R<?php echo $data['price']; ?></strong></td>
                              <td><?php echo $data['description']; ?></td>
                              <td><?php echo $data['qty']; ?></td>
                            </tr>
                          <?php 
                          }
                          ?>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
              </div>
            </div>
        </div>
      </div>

      <!-- footer  -->
        <?php include("../includes/templates/admin/footer.php");?>

        <!-- js  -->
         <script src="../assets/js/script.js"></script>
    </div>
</body>
</html>