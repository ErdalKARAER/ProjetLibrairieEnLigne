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
              <span class="section-heading-upper">Inscription</span>
            </h2>
            <div class="form_inscription">
            <h1>Bienvenue, inscrivez-vous : </h1>
            <form action="../traitement/traitement_inscri.php" method="post">

              <label>Nom :</label><input type="text" name="nom" placeholder="Ex : Jean"required/><br>
              <label>Prenom :</label><input type="text" name="prenom" placeholder="Ex : Pierre" required/><br>
              <label>Age :</label><input type="text" name="age" maxlength="2" placeholder="Ex : 23" required/><br>
              <label>Email :</label><input type="text" name="email" placeholder="Ex : JP@hotmail.fr" required/><br>
              <label>Téléphone :</label><input type="text" name="tel" maxlength="10" placeholder="Ex : 0652026123" required/><br>
                <br>
              <label>Mot de passe :</label><input type="password" name="pwd"required/><br>
                <label>Confirmer votre mot de passe :</label><input type="password" name="pwd2"required/><br>
                <br>

                <input type="submit" value="Inscription"/><br>
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
