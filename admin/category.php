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
      
        <div class="manage-products">
            <div class="content">
              <div class="box left">
                <div class="text-box">
                  
                    <div class="table-title">
                      <h3>Add New Category</h3>
                    </div>

                    <form action="process.php" class="form" method="post" enctype="multipart/form-data">
                      <label for="">New Category Name:<input type="text" class="textBox" placeholder="Category name" required name="category"></label>
                      <label for="">Upload Image: <input type="file" accept="image/*" class="textBox" name="photo" id=""></textarea></label>
                    
                      <div class="buttons">
                        <input type="submit" value="Save Category" name="new-category" class="btn">
                      </div>
                    </form>

                   <?php if (($_GET['msg'] ?? '') === 'new-category'): ?>
                    <div class="popup success"><p><i class="fa-solid fa-circle-check"></i> Category added successfully!</p></div>
                    <script>
                      setTimeout(() => {
                        document.querySelector('.popup')?.remove();
                      }, 3000);
                    </script>
                  <?php endif; ?>


                </div>
              </div>

              <div class="box right">
                <div class="text-box">
                   <div class="table-title">
                    <h3>Product Categories</h3>
                </div>

                  <div class="table-container">
                    <div class="table-content">
                        <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                       <tbody>
                          <?php 
                          include("../includes/db.php");
                          $sql = "SELECT * FROM categories  LIMIT 12";
                          $results = mysqli_query($conn, $sql);
                          while($data = mysqli_fetch_array($results)){
                          ?>
                            <tr>
                               <td><?php echo $data['id']; ?></td>
                              <td><img src="../<?php echo $data['photo']; ?>" alt="" class="image"></td>
                              <td><?php echo $data['category']; ?></td>
                              <td>
                                <div class="buttons">
                                  <i class="fa-solid fa-eye read"></i>
                                  <i class="fa-solid fa-pen-to-square edit"></i>
                                  <i class="fa-solid fa-trash-can delete"></i>
                                </div>
                              </td>
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
        
      </div>

      <!-- footer  -->
        <?php include("../includes/templates/admin/footer.php");?>

           <!-- js  -->
         <script src="../assets/js/script.js"></script>
    </div>
</body>
</html>