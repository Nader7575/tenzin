<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>
  <body>
  
    <!-- Barre de navigation -->
    <nav>
      <h1>Air Nike Jordan</h1>
      <div class="onglets">
        <p class="link">Nouveautés</p>
        <p class="link">Homme</p>
        <p class="link">Femme</p>
        <p class="link">Enfant</p>
        <p class="link">Cadeaux</p>
       <a href="register.php"> <p class="link">S'inscrire</p></a>
       <a href="login.php"> <p class="link">Se connecter</p></a>
        <form>
          <input type="search" placeholder="Rechercher" />
        </form>
        <p>
          <span class="material-symbols-outlined"> favorite </span>
        </p>
        <p>
          <span class="material-symbols-outlined"> shopping_cart </span>
        </p>
      </div>
    </nav>

    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre tableau de bord.</p>
    <a href="logout.php">Déconnexion</a>
    </div>
    <!-- fin de la barre de navigation -->

    <!-- Header  -->
    <header>
      <h1>C'est votre boutique, votre chez vous.</h1>
      <button>Naviguer</button>
      <span class="material-icons-outlined"> send </span>
    </header>
    <!-- header -->

    <!-- Section principale  -->
    <section class="main">
      <!-- Toutes les cartes  -->
      <div class="cards">
        <div class="card">
          <img
            src="https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_2.0/w_469,c_limit/99c3a5e4-64d6-483c-b5eb-d772861f8a03/chaussure-air-force-1-07-pour-XvnMjw.png"
            alt=""
          />
          <div class="card-header">
            <h4 class="title">Nike Air Force</h4>
            <h4 class="price">199,99 €</h4>
          </div>
          <div class="card-body">
            <p>Chaussure pour homme</p>
          </div>
        </div>

        <div class="card">
          <img
            src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/92bcc347-e758-4883-a396-5ec7d55403a8/chaussure-air-jordan-13-retro-mg1cpF.png"
            alt=""
          />
          <div class="card-header">
            <h4 class="title">Air Jordan 13 Retro</h4>
            <h4 class="price">199,99 €</h4>
          </div>
          <div class="card-body">
            <p>Chaussure pour homme</p>
          </div>
        </div>

        <div class="card">
          <img
            src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/9ed20c64-673d-4624-83af-ca49bf9e51b5/chaussure-air-jordan-3-retro-pour.png"
            alt=""
          />
          <div class="card-header">
            <h4 class="title">Air Jordan 3</h4>
            <h4 class="price">209,99 €</h4>
          </div>
          <div class="card-body">
            <p>Chaussure pour homme</p>
          </div>
        </div>

        <div class="card">
          <img
            src="https://static.nike.com/a/images/t_prod_ss/w_640,c_limit,f_auto/af1044d2-0e04-4181-9822-9a81181b9f07/date-de-sortie-de-la-air-force%C2%A01%C2%A0-07-%C2%AB%C2%A0mica-green%C2%A0%C2%BB-dv7186-300.jpg"
            alt=""
          />
          <div class="card-header">
            <h4 class="title">Air Force 1 '07</h4>
            <h4 class="price">129,99 €</h4>
          </div>
          <div class="card-body">
            <p>Chaussure pour homme</p>
          </div>
        </div>

        <div class="card">
          <img
            src="https://static.nike.com/a/images/t_prod_ss/w_640,c_limit,f_auto/bde46d4f-fad2-4409-ab67-8d7a73e80cf7/date-de-sortie-de-la-air-force%C2%A01-low-%C2%AB%C2%A0true-white-and-deep-forest%C2%A0%C2%BB-fb9128-100.jpg"
            alt=""
          />
          <div class="card-header">
            <h4 class="title">Air Force 1 Low</h4>
            <h4 class="price">149,99 € €</h4>
          </div>
          <div class="card-body">
            <p>Chaussure pour homme</p>
          </div>
        </div>

        <div class="card">
          <img
            src="https://static.nike.com/a/images/t_prod_ss/w_640,c_limit,f_auto/98315577-68f7-460b-8943-c83ba3734d2c/air-more-uptempo-%C2%AB%C2%A0rosewood-and-wolf-grey%C2%A0%C2%BB-pour-femme-dv1137-100.jpg"
            alt=""
          />
          <div class="card-header">
            <h4 class="title">Rosewood and Wolf Grey</h4>
            <h4 class="price">179,99 €</h4>
          </div>
          <div class="card-body">
            <p>Chaussure pour femme</p>
          </div>
        </div>
      </div>
      <!-- Fin de toutes les cartes  -->
      <div class="video">
        <!-- Video de presentation  -->
        <iframe
          src="https://www.youtube.com/embed/bPd8ChyVG9Y"
          allowfullscreen
        ></iframe>
      </div>
      <!-- Fin de la video de présentation  -->
    </section>
    <!-- Fin de la section principale  -->
    <!-- Pied de page  -->
    <footer>
      <p>&copy; Contactez-nous au 06 45 25 48 52</p>
      <div class="social_media">
        <p>
          <a href="https://www.instagram.com/" target="_blank"></a>
          <img style="width: 42px; height: 42px" src="instagram.png" alt="" />
        </p>
        <p>
          <img
            style="width: 42px; height: 42px"
            src="https://cdn.pixabay.com/photo/2016/11/01/12/09/twitter-logo-1788039_1280.jpg"
            alt=""
          />
        </p>
        <p>
          <img
            style="width: 42px; height: 42px"
            src="https://cdn.pixabay.com/photo/2015/05/17/10/51/facebook-770688_1280.png"
            alt=""
          />
        </p>
        <p></p>
        <p></p>
        <p></p>
      </div>
    </footer>
    <!-- Fin du pied de page  -->
  </body>
</html>

  </body>
</html>