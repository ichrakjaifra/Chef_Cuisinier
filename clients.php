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

  <div class="container">
    <div class="text-right">
        <a href="nouveau_client.php" class="btn">
            <i class="glyphicon glyphicon-plus"></i> Nouvelle client
        </a>
    </div>
</div>

<div class="container">
    <div class="panel">
        <div class="panel-heading">Liste des clients</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id client</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Téléphone</th>
                            <th>Adresse</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

  <div class="footer">
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
  </div>

  <script src="app.js"></script>

  </body>
  </html>