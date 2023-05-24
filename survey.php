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
    <title>Pour VOUS</title>
    <link rel="stylesheet" href="stylesurvey.css" />
    <link rel="icon" href="img/for-you.png">
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

    <div class="conteneur">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
                <form onsubmit="sendmail(); reset(); return false;">
				    <h2>Parlons nous</h2>
				    <input type="text" class="field" placeholder="Votre Nom & Prénom" id="name">
				    <input type="email" class="field" placeholder="Votre Adresse mail" id="email">
				    <input type="phone" class="field" placeholder="Votre Numéro de téléphone" id="phone">
                
				    <textarea class="field" id= "msg" placeholder="Exprimez-vous (vos préférences, vos idées, ce que vous préférez changer ... Bref, qui êtes vous?)" ></textarea>
				    <button class="bouton">Envoyer</button>
                </form>
			</div>
		</div>
	</div>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script lang="JavaScript">
        function sendmail(){
            Email.send({
                Host : "smtp.gmail.com",
                Username : "amani.krid.8@gmail.com",
                Password : "00000000",
                To : 'amani.krid.8@gmail.com',
                From : document.getElementById("email").value,
                Subject : "Nouveau Mail de TRIVEZ",
                Body : "Nom & Prénom: " + document.getElementById("name").value 
                + "<br> Adresse Mail: " + document.getElementById("email").value
                + "<br> Numéro de téléphone: " + document.getElementById("phone").value 
                + "<br> Message écrit: " + document.getElementById("msg").value 
            }).then(
              message => alert("Merci Pour votre temps, Vous êtes toujours la/e bienvenu(e)! ")
            );

        }
    </script>




  
    <!-- comment -->
    <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Plateforme</h4>
          <ul>
            <li><a href="#aproposdenous">À propos de nous</a></li>
            <li><a href="#fonctionnalite">Fonctionnalités</a></li>
            <li><a href="#feedback">feedback</a></li>
            <li><a href="#">Contribuer</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="#">Cours</a></li>
            <li><a href="#">Travaux Dirigés</a></li>
            <li><a href="#">Devoirs Surveillés</a></li>
            <li><a href="#">Examens</a></li>
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


