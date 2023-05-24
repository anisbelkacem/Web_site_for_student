<?php
session_start();
$bdd=new PDO ('mysql:host=localhost;dbname=webproject;charset=utf8;','root','');

if(isset($_POST['sign_in']))
{
  $email= $_POST['mail'];
  $mdp= $_POST['mdp'];

  $recup=$bdd->prepare('SELECT * FROM user where email=? AND mdp= ?');
  $recup->execute(array($email,$mdp));
  if ($recup->rowcount()>0)
  {
    $_SESSION['mdp']=$mdp;
    $_SESSION['nom']=$recup->fetch()['nom'];

    
    header('location:projet.php');
  }
  
  
}

if (isset($_POST['sign_up']))
{
    $nom =$_POST['nom'];
    $mdp=$_POST['mdp'];
    $confmdp=$_POST['confmdp'];
    $email=$_POST['mail'];
    $typeuser=$_POST['typeuser'];

    $insertuser=$bdd->prepare('INSERT INTO user (nom,mdp,email,typeuser)values(?,?,?,?)');
    if ($confmdp==$mdp)
    {
    $insertuser->execute(array($nom,$mdp,$email,$typeuser));
    }
    unset($bdd);
    

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="Trivez(2).png">
    <title>BIENVENU À TRIVEZ </title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form method="POST"   class="sign-in-form">
              <div class="logo">
                <img src="Trivez(2).png" alt="easyclass" />
                <h4>Trivez</h4>
              </div>

              <div class="heading">
                <h2>BIENVENU</h2>
                <h6>Pas encore inscrit ?</h6>
                <a href="#" class="toggle">S'inscrire</a>
                <br>
                <div  style=" color: red; font-size:12px" > <?php if(isset($_POST['sign_up']) && ($confmdp!=$mdp)) {echo "Oops! The password confirmation does not match the entered password. Please try again.";}?> </div>
                <div  style=" color: green; font-size:15px" > <?php if(isset($_POST['sign_up']) && ($confmdp==$mdp)) {echo "Congratulations!  Your account has been successfully created .";}?> </div>
                <div  style=" color: red; font-size: 12px"> <?php if(isset($_POST['sign_in'])) {if ($recup->rowcount()<=0) {echo "Oops! Your email or password incorrect  please try again .";}}?> </div>
              </div>

              <div class="actual-form">
                <div class="input-wrap"> 
                   
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                   
                    required
                    name="mail"
                  />
                  <label> Adresse mail </label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="mdp"
                  />
                  <label>Mot de passe</label>
                </div>

                <input type="submit" value="S'identifier" class="sign-btn" name='sign_in' />

                <p class="text">
                  Mot de passe oublié ?
                  <a href="#">Aide</a> Identification
                </p>
              </div>
            </form>

            <form method="POST" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="trivez(2).png" alt="easyclass" />
                <h4>Trivez</h4>
              </div>

              <div class="heading">
                <h2>Commençons ! </h2>
                <h6>Vous avez déjà un compte ?</h6>
                <a href="#" class="toggle">S'identifier </a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input type="text" minlength="4" class="input-field" autocomplete="off" name="nom" required />
                  <label>Nom et Prénom</label>
                </div>
                
                <div class="input-wrap">
                  <input type="email" class="input-field" autocomplete="off" required name="mail"/>
                  <label>Adresse mail</label>
                </div>

                <div class="input-wrap">
                <input type="text" minlength="4" class="input-field" autocomplete="off" name="typeuser" required />
                <label>Profession</label>
                </div>
                <div class="input-wrap">
                <input type="password" minlength="4" class="input-field" autocomplete="off" name="mdp" required />
                <label>Mot de passe </label>
              </div>
              <div class="input-wrap">
                <input type="password" minlength="4" class="input-field" autocomplete="off" name="confmdp" required />
                <label>Confirmer votre mot de passe </label>
              </div>
            
                
                <input type="submit" value="S'inscrire'" class="sign-btn" name='sign_up'/>

                <p class="text">
                  En s'inscrivant, j'accepte les 
                  <a href="#">Terme de services</a> et 
                  <a href="#">politiques de confidentialité</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="photo3.jpg" class="image img-1 show" alt="" />
              <img src="photo1.jpg" class="image img-2" alt="" />
              <img src="photo4.jpg" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Créer vos propres cours</h2>
                  <h2>Réaliser vos rêves</h2>
                  <h2>Inviter vos amis </h2>
                </div>
              </div>
              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
         

        </div>
        </div>
        </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
  </body>
</html>
