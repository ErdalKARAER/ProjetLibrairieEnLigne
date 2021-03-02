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
              <span class="section-heading-upper">ADMIN // Utilisateurs inscrits</span>
            </h2>
            <div class="panel_admin">
              <body>
                <p>
                    Selection email : <br>
                    <form action="../traitement/traitement_supp.php" method="post">
                    <select name="email">
              <?php
              $bdd = new PDO('mysql:host=localhost;dbname=projetbibliotheque;charset=utf8','root','');
              $choixnom = $bdd ->query('SELECT email FROM connexion');
              $a = $choixnom ->fetchall();
              foreach($a as $value)
                   {
                     echo"<option value=".$value['email'].">".$value['email']."</option>";
                   }
              ?>
              </select>

              <br>
              <br>
              Pour le supprimer, cliquez ici : <br><input type="submit" value="Supprimer" /><br>
            </form>
              <form action="../vue/panel_admin.php" method="post">
                <br><input type="submit" value="Retour" /><br>
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
