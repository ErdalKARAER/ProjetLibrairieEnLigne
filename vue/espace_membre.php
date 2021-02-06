<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Librairie en ligne</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/business-casual.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Librairie en ligne</span>
    <span class="site-heading-lower">Bienvenue</span>
  </h1>

  <!-- Navbar -->
  <?php include "../include/navbar.php"; ?>
  <!-- Navbar -->

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Votre compte</span>
            </h2>
            <div class="espace_membre">
            <h1>Vos informations : </h1>
              <?php
              session_start();
              $bdd = new PDO('mysql:host=localhost;dbname=projetbibliotheque;charset=utf8', 'root', '');
              $req = $bdd->prepare("SELECT * FROM connexion WHERE email = :email");
              $req->execute(array('email'=> $_SESSION['email']));
              $res = $req->fetchall();
              foreach($res as $valeur){
              ?>
              <p>
                  <p hidden><?php echo $valeur['id']?></p hidden>
                  Nom :
                  <?php echo $valeur['nom']?><br>
                  Prenom :
                  <?php echo $valeur['prenom']?><br>
                  Age :
                  <?php echo $valeur['age']?><br>
                  Email :
                  <?php echo $valeur['email']?><br>
                  Téléphone :
                  <?php echo $valeur['tel']?><br>
                  <br>
                  Cliquez pour modifier vos informations :
                  <form action="../Vues/form_connexion.php"><br>
                  <input type="submit" value="Modifier"/>
                  </form>
              <?php }?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
