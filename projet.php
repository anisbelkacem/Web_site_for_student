<?php
session_start();
// if (!$_SESSION['mdp'])
// {
//     header('location:login.php');
// }

?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trivez</title>
    <link rel="stylesheet" href="projet.css" />
    <link rel="icon" href="img/Trivez(2).png">
    <script src="https://kit.fontawesome.com/7140c5003e.js" crossorigin="anonymous"></script>
  </head>
  
  <body>
    
    <!-------------------------------------------debut de menu------------------------------------------------>
    <div >
      <nav>
      <img class="image" src="img/Trivez (6).png">
      <ul>
      <li><a href="#">ACCUEIL</a></li>
        <li><a href="#fonctionnalite">Fonctionalités</a></li>
        <li><a href="#aproposdenous">À propos de nous</a></li>
        <li><a href="#feedback">FeedBack</a></li>
      </ul>
      <img class="userpic"  src="img/user.png" onclick="toggleMenu()" >

      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">
            <img src="img/user-test.png" >
            <h2><?php echo $_SESSION['nom']; ?> </h2>
          </div>
          <hr>

          <a href="#" class="sub-menu-link">
            <img src="img/profile.png" >
            <p>Editer votre Profil</p>
            <span>></span>
          </a>
          <a href="#" class="sub-menu-link">
            <img src="img/setting.png" >
            <p>Paramètres & Confidentialités</p>
            <span>></span>
          </a>
          <a href="#" class="sub-menu-link">
            <img src="img/help.png" >
            <p>Aide & Support </p>
            <span>></span>
          </a>
          <a href="deconnection.php" class="sub-menu-link" name='logout'>
            <img src="img/logout.png" >
            <p>Déconnecter</p>
            <span>></span>
          </a>

        </div>
      </div>
      
     
      </nav>
      </div>
    <div class="trivez" style="background-color:lightgray;">
      <div class="content">
      <video src="z.mp4" autoplay loop muted plays-inline class="back-video"></video>
      
        <h1>Le changement commence avec VOUS</h1>
        <a href="contribution.php">Contribuer</a>
      </div>
    </div>
    <script language="javascript">
      let subMenu = document.getElementById("subMenu");
      function toggleMenu()
      {
        subMenu.classList.toggle("open-menu");
      }
    
    </script>
    <!--------------------------------------------------fonct------------------------------------------------>
    <div class="section1" id="fonctionnalite">
      <!--Categories-->
      <div class="categories">
          <div class="wrapper">
              <h3 class="category-title">FONCTIONNALITÉS</h3>
              <hr class="small">
              <div class="categories-container">
                  <div class="category">
                      <img src="https://distancelearning.anglia.ac.uk/wp-content/uploads/2019/04/Home-Study-Health-Tips-1.jpg" alt="1ère année">
                      <div class="category-body">
                          <h4>1ère année</h4>
                          
                      </div>
                  </div>
                  <div class="category">
                      <img src="https://wp-growpro.s3-eu-west-1.amazonaws.com/media/2017/11/requisitos-para-trabajar-en-canada_opt.jpg" alt="2ème année">
                      <div class="category-body">
                          <h4>2ème année</h4>  
                      </div>
                  </div>
                  <div class="category">
                      <img src="https://th.bing.com/th/id/R.bb3f81226537e7209fad5752f439a682?rik=QqvKA%2bVfgSKhfA&pid=ImgRaw&r=0" alt="3ème année">
                      <div class="category-body">
                          <h4>3ème année</h4>
                      </div>
                  </div>
              </div>
              <button class="btn-show-all" type="button">Toutes les Fonctionnalités</button>
          </div>
      </div>
    </div>
    <div class="section2" id="aproposdenous">
      <div class="about-section">
          <div class="inner-container">
            <h2>À PROPOS DE NOUS</h2>
              <hr class="small">
                <p class="text">
                      Nous sommes fiers de notre engagement envers la qualité, le service et la satisfaction de Vous.
                      Nous espérons que vous considérerez notre pplateforme pour vos besoins futurs, et nous nous engageons à vous offrir la meilleure expérience éducative possible.
                      Nous proposons: 
                </p>
                <div class="services">
                  <span>Cours</span>
                  <span>TDs & Exercices</span>
                  <span>DSs</span>
                  <span>Examens</span>
                </div>
          </div>
        </div>
      </div>
    <!--------------------------------------------------feedbk-------------------------------------------->
    <div class="feedbk" id="feedback">
      <h2>FEEDBACK</h2>
      <div class="contenir">
        <div class="wrap">
            <p class="textee">Comment évaluez-vous votre expérience avec Trivez?</p>
            <div class="emoji">
                <div >😖</div>
                <div >😐</div>
                <div >🙂</div>
                <div >😀</div>
                <div >😍</div>
                
            </div>
        </div>
        <textarea  class="textarea" cols="30" rows="3" placeholder="                                                          Votre Opinion nous intéresse ! "></textarea>
        <a href="#" class="btn">Envoyer</a>
      </div>
    
      <script lang="JavaScript">
        const contenir = document.querySelector('.contenir');
        const emoji= document.querySelector('.emoji');
        const textarea =document.querySelector('.textarea');
        const bouton =document.querySelector('.btn');

        emoji.addEventListener('click',(e) =>{

            if(e.target.className.includes('emoji')) return;

            textarea.classList.add('textarea--active');
            bouton.classList.add('btn--active');
        })
        contenir.addEventListener('mouseleave' ,() =>{

            textarea.classList.remove('textarea--active');
            bouton.classList.remove('btn--active');
        })
      </script>
    </div>
    <!----------------------------------map et footer-------------------------------------------------------->
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10019.773997720104!2d10.057332840366225!3d36.81277766534643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd2d96d4a9d6c9%3A0xbbe38a2694938acf!2s%C3%89cole%20Nationale%20des%20Sciences%20de%20l&#39;Informatique!5e0!3m2!1sfr!2stn!4v1680296399750!5m2!1sfr!2stn" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
      </div> 
    
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
