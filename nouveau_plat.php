<?php 
include('connexion.php');
$title="Ajouter";
$titre="";
$description="";
$id_menu="";
$image_path="";
$btn_title="Ajouter";

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
    <div class="panel-heading text-center"><?php echo $title; ?> un Nouveau Plat</div>
    <div class="panel-body">
      <form action="plats.php" method="POST">
      
      <div class="form-group">
          <label for="titre">Categorie :</label>
          <input type="text" class="form-control" name="categorie" value="<?php echo $categorie; ?>" placeholder="Entrez categorie" autocomplete="false">
          <div class="form-group">
          <div class="form-group">
          <label for="description">Description :</label>
          <textarea class="form-control" name="description" rows="3" placeholder="Entrez description"><?php echo $description; ?></textarea>
        </div>

        <div class="form-group">
          <label for="id_menu">Id menu :</label>
          <select name="id_menu" id="id_menu" class="form-control" required>
                        <option value="">-- Sélectionnez un menu --</option>
                        
                    </select>
        </div>
        
        <div class="form-group">
          <label for="image_path">Image :</label>
          <input type="file" name="image_path" id="image_path" class="form-control" value="<?php echo $image_path; ?>">
        </div>
        

        <?php

        if (isset($_GET['id_plat'])){?>

           <input type="hidden" name="" value="<?php echo $_GET['id_plat'] ?>">

       <?php   }  
       
       ?>

        <input type="submit" class="btn btn-primary" value="<?php echo $btn_title; ?>" name="Ajouter">
        <a href="menus.php" class="btn btn-default">Retour</a>
      </form>
    </div>
  </div>
</div>

</body>
</html>