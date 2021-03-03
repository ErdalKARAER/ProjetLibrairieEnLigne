<!DOCTYPE html>
<html lang="fr">


<?php include "../include/header.php"; ?>
<?php include "../include/titre.php"; ?>
<?php include "../include/navbar.php"; ?>

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
                  <form action="../vue/modificationmembre.php"><br>
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

<?php include "../include/footer.php"; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
