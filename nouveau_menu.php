<?php 
include('connexion.php');
$title = "Ajouter";
$titre = "";
$description = "";
$image_path = "";
$btn_title = "Ajouter";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $image_path = $_FILES['image_path']['name'];
    $destination = 'img/' . $image_path;
    $imagePath = pathinfo($destination, PATHINFO_EXTENSION);
    $valid_extension = array('png', 'jpg', 'jpeg', 'gif', 'svg');

    if (in_array(strtolower($imagePath), $valid_extension)) {
        move_uploaded_file($_FILES['image_path']['tmp_name'], $destination);

        $stmt = $conn->prepare("INSERT INTO `menu`(`titre`, `description`, `image_path`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $titre, $description, $image_path);
        $stmt->execute();
        $stmt->close();

        header("Location: menu.php");
        exit();
    } else {
        echo "Extension de fichier invalide.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_chef.css">
  <link rel="shortcut icon" href="images/logo1.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fodd website | Home</title>
</head>
<body>
  <header>
    <div class="header">

    <div class="headerbar">
      <div class="account">
        <ul>
          <a href="">
            <li>
              <i class="fa-solid fa-house-chimney"></i>
            </li>
          </a>
  
          <a href="#">
            <li>
              <i class="fa-solid fa-magnifying-glass searchicon" id="searchicon1"></i>
            </li>
          </a>

          <div class="search" id="searchinput1">
            <input type="search">
            <i class="fa-solid fa-magnifying-glass searchicon"></i>
          </div>

          <a href="">
            <li>
              <i class="fa-solid fa-user" id="user-lap"></i>
            </li>
          </a>
          </ul>
      </div>

      <div class="nav">
        <ul>
          <a href="clients.php">
            <li>Clients</li>
          </a>
          <a href="reservations.php">
            <li>Reservations</li>
          </a>
          <a href="menus.php">
            <li>Menus</li>
          </a>
          <a href="plats.php">
            <li>Plats</li>
          </a>
        </ul>
      </div>      
    </div>  

    <div class="logo">
      <img src="images/official logo wide.png" alt="">
    </div>
    <div class="bar">
      <i class="fa-solid fa-bars"></i>
      <i class="fa-solid fa-xmark" id="hdcross"></i>
    </div>

    <div class="nav">
      <ul>
        <a href="cients.php">
          <li>Clients</li>
        </a>
        <a href="reservations.php">
          <li>Reservations</li>
        </a>
        <a href="menus.php">
          <li>Menus</li>
        </a>
        <a href="plats.php">
          <li>Plats</li>
        </a>
      </ul>
    </div>

    <div class="account">
      <ul>
        <a href="#">
          <li>
            <i class="fa-solid fa-house-chimney"></i>
          </li>
        </a>

        <a href="#">
          <li>
            <i class="fa-solid fa-magnifying-glass searchicon" id="searchicon2"></i>
          </li>
        </a>

        <div class="search" id="searchinput2">
          <input type="search">
          <i class="fa-solid fa-magnifying-glass searchicon"></i>
        </div>

        <a href="#">
          <li>
            <i class="fa-solid fa-user" id="user-lap"></i>
          </li>
        </a>
      </ul>
    </div>
  </div>
  </header>

  <div class="container" style="margin-top: 80px;">
  <div class="panel panel-primary">
    <div class="panel-heading text-center"><?php echo $title; ?> un Nouveau Menu</div>
    <div class="panel-body">
      <form action="menus.php" method="POST" enctype="multipart/form-data">
      
      <div class="form-group custom-form-group">
          <label for="titre">Titre :</label>
          <input type="text" class="form-control" name="titre" value="<?php echo $titre; ?>" placeholder="Entrez le titre" autocomplete="false">
          <div class="form-group custom-form-group">
          <label for="description">Description :</label>
          <textarea class="form-control" name="description" rows="3" placeholder="Entrez description"><?php echo $description; ?></textarea>
        </div>
        
        <div class="form-group custom-form-group">
          <label for="image_path">Image :</label>
          <input type="file" name="image_path" id="image_path" class="form-control" value="<?php echo $image_path; ?>">
        </div>
        

        <?php

        if (isset($_GET['id_menu'])){?>

           <input type="hidden" name="" value="<?php echo $_GET['id_menu'] ?>">

       <?php   }  
       
       ?>

        <input type="submit" class="btn btn-primary" value="<?php echo $btn_title; ?>" name="Ajouter">
        <a href="menus.php" class="btn btn-default">Retour</a>
      </form>
    </div>
  </div>
</div>

  <!-- <div class="footer">
    <div class="footer-1">
      <div class="logo">
        <img src="images/official logo wide.png" alt="">
      </div>
      <div>
        <address>
          <p>Email: exampleemail@gmail.com</p>
          <p>Youtube: Chef Cuisinier</p>
          <br>Mr. exemple 123,</br> YouCode, Safi </br> Maroc</p>
        </address>
      </div>
    </div>

    <div class="footer-2">
      <img src="images/logo1.jpg" alt="">
      <h2>Powerd by <em>Ichrak Jaifra</em></h2>
    </div>
  </div> -->

  <script src="app.js"></script>

  </body>
  </html>