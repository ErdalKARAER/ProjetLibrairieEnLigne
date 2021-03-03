<!DOCTYPE html>
<html lang="fr">

<!-- Include -->
  <?php include "../exercice_php_erdal/projetkaraeramale/projetkaraeramale/include/header.php"; ?>
  <?php include "/exercice_php_erdal/projetkaraeramale/projetkaraeramale/include/titre.php"; ?>
  <?php include "/exercice_php_erdal/projetkaraeramale/projetkaraeramale/include/navbar.php"; ?>
<!-- Include -->

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <h1> Nos produits : </h1>
                <br>
              <a href="form_connexion.php"><input type="button" class="btn btn-primary" value="Nos CD"></a>
                <button type="button" class="btn btn-primary">Nos films</button>
                <button type="button" class="btn btn-primary">Nos livres</button>
                <br>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include "/exercice_php_erdal/projetkaraeramale/projetkaraeramale/include/footer.php"; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Script to highlight the active date in the hours list -->
    <script>
      $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>

  </body>

</html>



  <?php include "../include/footer.php"; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
