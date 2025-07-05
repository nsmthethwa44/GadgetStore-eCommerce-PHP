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

     <?php 
            include("../includes/db.php");
            $id = $_GET["id"];

            if ($id) {
                $sql = "SELECT * FROM products WHERE id = $id";
                $results = mysqli_query($conn, $sql);

                if (mysqli_num_rows($results) > 0) {
                    $data = mysqli_fetch_assoc($results); // fetch once
                } else {
                    echo "No product found.";
                    exit;
                }
            } else {
                echo "Invalid product ID.";
                exit;
            }
        ?>

      
        <div class="manage-products">
            <div class="content">
              <div class="box left">
                <div class="text-box">
                  
                    <div class="table-title">
                      <h3>Update Products Details</h3>
                    </div>

                    <form action="process.php" class="form" method="post" enctype="multipart/form-data">
                            <label for="">Product Name:<input type="text" class="textBox" placeholder="Product name" required name="title"></label>
                            <label for="">Select Category:
                                <select name="category" id="" class="textBox">
                                <option value="">-- Select Category --</option>
                                <?php 
                                    $categories = [
                                        "Headphones", "Gaming Mouse", "MacBook/PCs", "RGB Keyboard",
                                        "Playstation", "Gaming Headphones", "Apple LED", 
                                        "Samsung Phone", "Min Ipad"
                                    ];
                                    foreach ($categories as $cat) {
                                        $selected = ($data['category'] === $cat) ? "selected" : "";
                                        echo "<option value=\"$cat\" $selected>$cat</option>";
                                    }
                                    ?>
                                </select>
                            </label>
                            <label for="">Price:<input type="text" class="textBox" placeholder="Price" required name="price"></label>
                            <label for="">Quantity:<input type="number" class="textBox"  name="qty" id="" placeholder="1"></label>
                            <label for="">Product Description:<textarea name="description" rows="5" cols="5" class="textBox" id="" placeholder="Product Description"><?php echo $data['description']; ?></textarea></label>
                            <label for="">Upload Image: <input type="file" accept="image/*" class="textBox" name="photo" id=""></label>

                            <input type="hidden" name="id" id="" value="<?php echo $id; ?>">
                            
                            <div class="buttons">
                                <input type="submit" value="Update Product" name="update" class="btn">
                            </div>
                    </form>

                   <?php if (($_GET['msg'] ?? '') === 'updated'): ?>
                    <div class="popup success section"><p class="popup-text"><i class="fa-solid fa-circle-check"></i> Product updated successfully!</p></div>
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
                    <h3>In Store Products</h3>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               <td><?php echo $data['id']; ?></td>
                              <td><img src="../<?php echo $data['photo']; ?>" alt="" class="image"></td>
                              <td><?php echo $data['title']; ?></td>
                              <td><?php echo $data['category']; ?></td>
                              <td><strong>R<?php echo $data['price']; ?></strong></td>
                              <td><?php echo $data['description']; ?></td>
                              <td><?php echo $data['qty']; ?></td>
                              <td>
                                <div class="buttons">
                                  <i class="fa-solid fa-eye read"></i>
                                  <i class="fa-solid fa-pen-to-square edit"></i>
                                  <i class="fa-solid fa-trash-can delete"></i>
                                </div>
                              </td>
                            </tr>
                    
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