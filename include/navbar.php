<!DOCTYPE html>
<html>
<?php
session_start();
if(empty($_SESSION['email'])) {
  ?>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/index.php">Accueil
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/vue/form_inscri.php">Inscription</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/vue/form_connexion.php">Connexion</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/vue/produits.php">Nos produits</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="store.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php }; ?>
<?php
if(isset($_SESSION['email'])) {
  ?>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/index.php">Accueil
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/vue/espace_membre.php">Mon compte</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale//traitement/deconnexion.php">Déconnexion</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/vue/produits.php">Nos produits</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="store.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php }; ?>

<?php if(isset($_SESSION['role']) == 1 ){ ?>

  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="./exercice_php_erdal/projetkaraeramale/projetkaraeramale/index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/vue/gestion_compte.php">Gestion des comptes</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/traitement/deconnexion.php">Déconnexion</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/exercice_php_erdal/projetkaraeramale/projetkaraeramale/vue/produits.php">Nos produits</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.html"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php } ?>
</html>
