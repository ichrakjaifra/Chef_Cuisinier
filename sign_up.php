

<?php
// Connexion à la base de données
include('connexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $telephone = trim($_POST['telephone']);
    $adresse = trim($_POST['adresse']);
    $id_role = 2; 

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (nom, pernom, email, password, telephone, adresse, id_role) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssi", $nom, $prenom, $email, $hashed_password, $telephone, $adresse, $id_role);

    if (mysqli_stmt_execute($stmt)) {
        echo "Inscription réussie! <a href='sign_inn.php'>Connectez-vous ici</a>";
    } else {
        echo "Erreur: " . mysqli_error($conn);
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
      <h3>register now</h3>
      <input type="text" name="nom" placeholder="Nom" required><br>
    <input type="text" name="prenom" placeholder="Prénom" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <input type="text" name="telephone" placeholder="Téléphone"><br>
    <textarea name="adresse" placeholder="Adresse"></textarea><br>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="sign_inn.php">login now</a></p>
   </form>

</div>
</body>
</html>
