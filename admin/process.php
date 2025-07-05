<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}
?>


<?php
if (isset($_POST['create'])) {
    require '../includes/db.php';

    $title    = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $price    = floatval($_POST['price']);
    $qty      = intval($_POST['qty']);
    $desc     = mysqli_real_escape_string($conn, $_POST['description']);

  if (!empty($_FILES['photo']['name'])) {

    $uploadDir = __DIR__ . '/../uploads';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

    $cleanName  = preg_replace('/\s+/', '_', basename($_FILES['photo']['name']));
    $fileName   = time() . '_' . $cleanName;
    $targetPath = $uploadDir . '/' . $fileName;  // disk path
    $webPath    = 'uploads/' . $fileName;        // path for DB/browser

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath)) {
        $photo = "'" . mysqli_real_escape_string($conn, $webPath) . "'";
    }
}

    $sql = "
        INSERT INTO products (title, category, price, qty, photo, description)
        VALUES ('$title', '$category', $price, $qty, $photo, '$desc')
    ";

    if (mysqli_query($conn, $sql)) {
        header('location: productsManagement.php?msg=created');
    } else {
        die('Insert error: ' . mysqli_error($conn));
    }
}
?>

<?php
if (isset($_POST['new-category'])) {
    require '../includes/db.php';
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    
     if (!empty($_FILES['photo']['name'])) {

    $uploadDir = __DIR__ . '/../uploads';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

    $cleanName  = preg_replace('/\s+/', '_', basename($_FILES['photo']['name']));
    $fileName   = time() . '_' . $cleanName;
    $targetPath = $uploadDir . '/' . $fileName;  // disk path
    $webPath    = 'uploads/' . $fileName;        // path for DB/browser

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath)) {
        $photo = "'" . mysqli_real_escape_string($conn, $webPath) . "'";
    }
}
    $sql = "INSERT INTO categories (category, photo) VALUES ('$category',  $photo)";
    if (mysqli_query($conn, $sql)) {
        header('location: category.php?msg=new-category');
    } else {
        die('Insert error: ' . mysqli_error($conn));
    }
}
?>


<?php
if (isset($_POST['update'])) {
    require '../includes/db.php';

    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $title    = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $price    = floatval($_POST['price']);
    $qty      = intval($_POST['qty']);
    $desc     = mysqli_real_escape_string($conn, $_POST['description']);

  if (!empty($_FILES['photo']['name'])) {

    $uploadDir = __DIR__ . '/../uploads';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

    $cleanName  = preg_replace('/\s+/', '_', basename($_FILES['photo']['name']));
    $fileName   = time() . '_' . $cleanName;
    $targetPath = $uploadDir . '/' . $fileName;  // disk path
    $webPath    = 'uploads/' . $fileName;        // path for DB/browser

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath)) {
        $photo = "'" . mysqli_real_escape_string($conn, $webPath) . "'";
    }
}

    $sql = "UPDATE products SET  title = '$title', category =  '$category',  price = $price, qty = $qty, photo = $photo, description = '$desc' WHERE id = $id" ;

    if (mysqli_query($conn, $sql)) {
        header('location: productsManagement.php?msg=updated');
    } else {
        die('Insert error: ' . mysqli_error($conn));
    }
}
?>