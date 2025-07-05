<?php
session_start();
include("../includes/db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Example check (replace with hashed check in real app)
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        header("Location: index.php"); 
        exit;
    } else {
        $error = "Invalid username or password.";
    }
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
    <div class="login">
            <?php if (isset($error)) : ?>
                <div class="popup error section">
                  <p class="error-text"><i class="fa-solid fa-circle-xmark"></i><?php echo $error; ?></p>
                </div>
                <script>
                  setTimeout(() => {
                    document.querySelector('.popup')?.remove();
                  }, 5000);
                </script>
              <?php endif; ?>

        <div class="container">
            <form action="" method="post" class="form">
                <div class="logo">
                    <h2>Gadget<span>Store</span></h2>
                </div>

                <div class="divider"></div>

                <div class="form-inputs">
                    <div class="input-box">
                       <input type="text" name="username" class="textBox" placeholder="Username" required>
                        <input type="password" name="password" class="textBox" placeholder="Password" required>
                    </div>

                    <span><input type="checkbox" name="" id="">Remember Me</span>

                    <div class="buttons">
                        <button type="submit" class="btn">Sign In</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- footer  -->
        <?php include("../includes/templates/admin/footer.php");?>
    </div>
</body>
</html>