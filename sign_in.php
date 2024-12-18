<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In Modal</title>
  <link rel="stylesheet" href="sign_in.css">
  <!-- FontAwesome CDN pour l'icône utilisateur -->
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body>

  <!-- Bouton pour afficher le formulaire -->
  <a href="#" id="openModal">
    <li>
      <i class="fa-solid fa-user" id="user-lap"></i>
    </li>
  </a>

  <!-- Modale du formulaire Sign In -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span id="closeModal" class="close">&times;</span>
      <h2>Sign In</h2>
      <form>
        <label for="email">Enter Your Email:</label>
        <input type="email" id="email" placeholder="E-mail" required>

        <label for="password">Enter Password:</label>
        <input type="password" id="password" placeholder="Password" required>

        <button type="submit" class="btn">Sign In</button>
      </form>
      <p><a href="#">Forgot Password?</a></p>
      <p>Don't have an account? <a href="sign_up">Sign Up</a></p>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
