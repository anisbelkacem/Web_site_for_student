<?php
session_start();
// if (!$_SESSION['mdp'])
// {
//     header('location:login.php');
// }

?>







<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Postulation</title>
    <link rel="stylesheet" href="application.css" />
    <link rel="icon" href="Trivez(2).png">
    <script src="https://kit.fontawesome.com/7140c5003e.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- navigation -->
    <div >
      <nav>
      <img class="image" src="Trivez (6).png">
      <ul>
        <li><a href="projet.php">ACCUEIL</a></li>
        <li><a href="projet.php">Fonctionalités</a></li>
        <li><a href="projet.php">À propos de nous</a></li>
        <li><a href="projet.php">Feedback</a></li>
      </ul>
      <img class="userpic"  src="user.png" onclick="toggleMenu()" >

      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">
            <img src="user-test.png" >
            <h2><?php echo $_SESSION['nom']; ?> </h2>
          </div>
          <hr>

          <a href="#" class="sub-menu-link">
            <img src="profile.png" >
            <p>Editer votre Profil</p>
            <span>></span>
          </a>
          <a href="#" class="sub-menu-link">
            <img src="setting.png" >
            <p>Paramètres & Confidentialités</p>
            <span>></span>
          </a>
          <a href="#" class="sub-menu-link">
            <img src="help.png" >
            <p>Aide & Support </p>
            <span>></span>
          </a>
          <a href="deconnection.php" class="sub-menu-link" name='logout'>
            <img src="logout.png" >
            <p>Déconnecter</p>
            <span>></span>
          </a>

        </div>
      </div>
      
     
      </nav>
      </div>
    <script language="javascript">
      let subMenu = document.getElementById("subMenu");
      function toggleMenu()
      {
        subMenu.classList.toggle("open-menu");
      }
    
    </script>
    
    <!-- navigation -->
  <div class="cont" >
    <div class="container-app">
      <div class="title">Postulation</div>
      <div class="content">
        <form action="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Nom & Prénom</span>
              <input type="text" placeholder="Enter your name" required />
            </div>
            <div class="input-box">
              <span class="details">Adresse mail</span>
              <input type="email" placeholder="Enter your email" required />
            </div>
            <div class="input-box">
              <span class="details">Date de naissance</span>
              <input type="date" placeholder="Enter birth date" required />
            </div>

            <div class="input-box">
              <span class="details"> Adresse</span>
              <input
                type="text"
                placeholder="Enter your current Address"
                required
              />
            </div>
            <div class="input-box">
              <span class="details">LinkedIn </span>
              <input type="url" placeholder="Enter the URL" required />
            </div>

            <div class="input-box">
              <span class="details">Téléphone</span>
              <input type="number" placeholder="Enter phone number" required />
            </div>
          </div>
          <div class="position">
            <input type="radio" name="position" id="dot-1" />
            <input type="radio" name="position" id="dot-2" />
            <input type="radio" name="position" id="dot-3" />
            <span class="position-title">Postuler à :</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="position">Développeur</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="position">Directeur Média</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="position">Directeur Sponsoring</span>
              </label>
            </div>
          </div>
          <p>CV</p>
          <div class="drop-container">
            <span class="drop-title">Déposer fichiers ici</span>
            ou
            <input name="reseme" type="file" required />
          </div>
          <div class="button">
            <input type="submit" value="Register" />
          </div>
        </form>
      </div>
    </div>
  </div>
    <!-- comment -->
    <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Plateforme</h4>
          <ul>
            <li><a href="projet.php">À propos de nous</a></li>
            <li><a href="projet.php">Fonctionnalités</a></li>
            <li><a href="projet.php">feedback</a></li>
            <li><a href="projet.php">Accueil</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="projet.php">Cours</a></li>
            <li><a href="projet.php">Travaux Dirigés</a></li>
            <li><a href="projet.php">Devoirs Surveillés</a></li>
            <li><a href="projet.php">Examens</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Autres Services</h4>
          <ul>
            
            <li><a href="pay.php">Passer en Premium</a></li>
            <li><a href="survey.php">Pour VOUS</a></li>
            <li><a href="contribution.php">Contribuer</a></li>
            <li><a href="application.php">Postuler à un travail</a></li>
          
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>Suivez-nous</h4>
          <div class="social-links">
          
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          
          </div>
        </div>
      </div>
      
    </div>
    <div class="footer-bottom">
      <p>Copyright &copy;2023 Trivez Reserved. Designed by <span> Anis_Belkacem || Amani_Krid || MohamedAziz_Khedhri </span></p>
    </div>
    
      
 </footer>
  <a class="up" href="#"><i class="fa-solid fa-angles-up fa-bounce " style="color: #317774;"></i></a>


</body>
</html>
