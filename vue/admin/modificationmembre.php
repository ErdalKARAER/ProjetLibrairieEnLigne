<!DOCTYPE html>
<html lang="fr">

<!-- Include -->
  <?php include "../include/header.php"; ?>
  <?php include "../include/titre.php"; ?>
  <?php include "../include/navbar.php"; ?>
<!-- Include -->

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Votre compte</span>
            </h2>
            <div class="modif_espace_membre">
            <h1>Modification : </h1>
              <?php
              $bdd = new PDO('mysql:host=localhost;dbname=projetbibliotheque;charset=utf8', 'root', '');
              $req = $bdd->prepare("SELECT * FROM connexion WHERE email = :email");
              $req->execute(array('email'=> $_SESSION['email']));
              $res = $req->fetchall();
              foreach($res as $valeur){
              ?>
              <form action="../traitement/traitement_modif.php" method="post">
                  <input hidden  name="id" value=<?php echo $valeur['id']?>>
                  Nom : <input type="text" name="nom" placeholder="<?php echo $valeur['nom']?>"><br>
                  Prenom : <input type="text" name="prenom" placeholder="<?php echo $valeur['prenom']?>"><br>
                  Age : <input type="text" name="age" placeholder="<?php echo $valeur['age']?>"><br>
                  Email : <input type="text" name="email" placeholder="<?php echo $valeur['email']?>"><br>
                  Téléphone : <input type="text" name="tel" placeholder="<?php echo $valeur['tel']?>"><br>
                  <br>
                  Cliquez pour validez vos choix : <br>
                  <input type="submit" value="Valider"/>
              <?php }?>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "../include/footer.php"; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
