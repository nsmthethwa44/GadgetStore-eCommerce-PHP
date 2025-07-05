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
    <?php include("../includes/templates/admin/sidebar.php"); ?>

    <div class="main-content">
      <!-- header  -->
      <?php include("../includes/templates/admin/header.php"); ?>

      <div class="manage-products">
        <div class="content">
          <div class="box left">
            <div class="text-box">

              <div class="table-title">
                <h3>Add New Products</h3>
              </div>

              <form action="process.php" class="form" method="post" enctype="multipart/form-data">
                <label for="">Product Name:<input type="text" class="textBox" placeholder="Product name" required name="title"></label>
                <label for="">Select Category:
                  <select name="category" id="" class="textBox">
                    <option value="">-- Select Category --</option>
                    <option value="Headphones">Headphones</option>
                    <option value="Gaming Mouse">Gaming Mouse</option>
                    <option value="MacBook/PCs">MacBook/PCs</option>
                    <option value="RGB Keyboard">RGB Keyboard</option>
                    <option value="Playstation">Playstation</option>
                    <option value="Gaming Headphones">Gaming Headphones</option>
                    <option value="Apple LED">Apple LED</option>
                    <option value="Samsung Phone">Samsung Phone</option>
                    <option value="Min Ipad">Min Ipad</option>
                  </select>
                </label>
                <label for="">Price:<input type="text" class="textBox" placeholder="Price" required name="price"></label>
                <label for="">Quantity:<input type="number" class="textBox" name="qty" id="" placeholder="1"></label>
                <label for="">Product Description:<textarea name="description" rows="5" cols="5" class="textBox" id="" placeholder="Product Description"></textarea></label>
                <label for="">Upload Image: <input type="file" accept="image/*" class="textBox" name="photo" id=""></label>

                <div class="buttons">
                  <input type="submit" value="Save Product" name="create" class="btn">
                </div>
              </form>

              <?php if (($_GET['msg'] ?? '') === 'created'): ?>
                <div class="popup success section">
                  <p class="popup-text"><i class="fa-solid fa-circle-check"></i> Product added successfully!</p>
                </div>
                <script>
                  setTimeout(() => {
                    document.querySelector('.popup')?.remove();
                  }, 5000);
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
                <?php
                include("../includes/db.php");

                // Basic settings 
                $itemsPerPage = 10;                          // how many products per page
                $page        = isset($_GET['page']) && $_GET['page'] > 0
                  ? (int) $_GET['page'] : 1;   // current page or 1
                $offset      = ($page - 1) * $itemsPerPage; // row to start from

                // Total products for page count 
                $totalRowsRes = mysqli_query($conn, "SELECT COUNT(*) AS total FROM products");
                $totalRows    = (int) mysqli_fetch_assoc($totalRowsRes)['total'];
                $totalPages   = ceil($totalRows / $itemsPerPage);

                $sql     = "SELECT * FROM products ORDER BY id ASC LIMIT $itemsPerPage OFFSET $offset";
                $results = mysqli_query($conn, $sql);
                ?>

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
                      <?php
                      while ($data = mysqli_fetch_array($results)) {
                      ?>
                        <tr>
                          <td><?php echo $data['id']; ?></td>
                          <td><img src="../<?php echo $data['photo']; ?>" alt="" class="image"></td>
                          <td><?php echo $data['title']; ?></td>
                          <td><?php echo $data['category']; ?></td>
                          <td><strong>R<?php echo $data['price']; ?></strong></td>
                          <td><p><?php echo $data['description']; ?></p></td>
                          <td><?php echo $data['qty']; ?></td>
                          <td>
                            <div class="buttons">
                              <i class="fa-solid fa-eye read"></i>
                              <a href="update.php?id=<?php echo $data["id"] ?>"> <i class="fa-solid fa-pen-to-square edit"></i></a>
                              <a href="delete.php?id=<?php echo $data["id"] ?>"> <i class="fa-solid fa-trash-can delete"></i></a>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
              </div>

               <!-- Pagination -->
                   <?php
                if ($totalPages > 1): ?>
                <ul class="pagination">
                    <!-- Prev -->
                    <?php if ($page > 1): ?>
                        <li><a href="?page=<?= $page - 1; ?>">‹ Prev</a></li>
                    <?php endif; ?>

                    <!-- Page numbers (max 7 links: current ±3) -->
                    <?php
                    $start = max(1, $page - 3);
                    $end   = min($totalPages, $page + 3);

                    for ($i = $start; $i <= $end; $i++):
                    ?>
                        <li class="<?= $i == $page ? 'active' : ''; ?>">
                            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <!-- Next -->
                    <?php if ($page < $totalPages): ?>
                        <li><a href="?page=<?= $page + 1; ?>">Next ›</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
   <!-- footer  -->
    <?php include("../includes/templates/admin/footer.php"); ?>

       <!-- js  -->
         <script src="../assets/js/script.js"></script>
</body>

</html>