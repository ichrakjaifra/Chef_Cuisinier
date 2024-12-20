<?php
session_start();
include('connexion.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id_user'];
        $_SESSION['role'] = $user['id_role'];

        if ($user['id_role'] == 1) {
            header("Location: clients.php"); // Admin
        } else {
            header("Location: index.php"); // Utilisateur
        }
        exit();
    } else {
        $error = "Email ou mot de passe incorrect";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In Modal</title>
  <link rel="stylesheet" href="sign.css">
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body>

  
  <div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="sign_up.php">register now</a></p>
   </form>

</div>


</body>
</html>

