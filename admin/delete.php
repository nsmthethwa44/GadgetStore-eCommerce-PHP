<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}
?>

<?php 
$id = $_GET["id"];
if($id){
      include("../includes/db.php");

     $sql = "DELETE  FROM products WHERE id = $id";

     if(mysqli_query($conn, $sql)){
        header("location: productsManagement.php");
     }else{
        die("Data not deleted!");
     }

}else{
echo "Product not found!";
}
?>