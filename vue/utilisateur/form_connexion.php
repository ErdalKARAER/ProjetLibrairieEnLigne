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
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <div class="form_connexion">
                <h1>Connectez-vous : </h1>
                <form action="../traitement/traitement_co.php" method="post">
                  <p>
                    Mail : <input type="text" name="email" required/><br>
                    <br>
                      Mot de passe : <input type="password" name="pwd" required/><br>
                    <br>
                  </p>
                    <input type="submit" value="Connexion"/><br>
                  </form>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include "../include/footer.php"; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Script to highlight the active date in the hours list -->
    <script>
      $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>

  </body>

</html>
