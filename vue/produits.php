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
              <span class="section-heading-upper">Liste des CD</span>
            </h2>
            <!-- Tableau simple avec en-tête -->
<table>
  <tr>
    <th>Nom du CD : </th>
    <th>Nom</th>
  </tr>
  <tr>
    <td>Jean</td>
    <td>Dupont</td>
  </tr>
  <tr>
    <td>Marion</td>
    <td>Duval</td>
  </tr>
</table>

<!-- Tableau utilisant thead, tfoot, et tbody -->
<table>
  <thead>
    <tr>
      <th>Contenu d'en-tête 1</th>
      <th>Contenu d'en-tête 2</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Contenu interne 1</td>
      <td>Contenu interne 2</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td>Pied de tableau 1</td>
      <td>Pied de tableau 2</td>
    </tr>
  </tfoot>
</table>

<!-- Tableau utilisant colgroup -->
<table>
  <colgroup span="4" class="columns"></colgroup>
  <tr>
    <th>Pays</th>
    <th>Capitales</th>
    <th>Population</th>
    <th>Langue</th>
  </tr>
  <tr>
    <td>USA</td>
    <td>Washington D.C.</td>
    <td>309 millions</td>
    <td>Anglais</td>
  </tr>
  <tr>
    <td>Suède</td>
    <td>Stockholm</td>
    <td>9 millions</td>
    <td>Suédois</td>
  </tr>
</table>

<!-- Tableau utilisant colgroup et col -->
<table>
  <colgroup>
    <col class="column1">
    <col class="columns2plus3" span="2">
  </colgroup>
  <tr>
    <th>Citron vert</th>
    <th>Citron</th>
    <th>Orange</th>
  </tr>
  <tr>
    <td>Vert</td>
    <td>Jaune</td>
    <td>Orange</td>
  </tr>
</table>

<!-- Tableau simple avec une légende -->
<table>
  <caption>Super légende</caption>
  <tr>
    <td>Données géniales</td>
  </tr>
</table
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
