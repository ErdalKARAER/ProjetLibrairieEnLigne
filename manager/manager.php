<?php

class manager{

public function inscription($co)
{
$bdd = new PDO('mysql:host=localhost;dbname=projetbibliotheque;charset=utf8','root','');
$req = $bdd->prepare('SELECT email FROM connexion WHERE email = :email');
$req->execute(array('email'=>$co->getEmail()));
$res = $req->fetch();
if($res)
{
  echo "erreur, nom deja existant";
  echo '<form action="../Vues/formulaire_inscription.php">
  <input type="submit"  value="Retour"/><br>
</form>';
}

else {
  $bdd2 = new PDO('mysql:host=localhost;dbname=projetbibliotheque;charset=utf8','root','');
  $req2 = $bdd2->prepare("INSERT INTO connexion (prenom, nom, email, tel, age, pwd, admin) VALUES (:prenom, :nom, :email, :tel, :age, :pwd, :admin)");
  $res2 = $req2->execute(array(
                      'prenom'=>$co->getPrenom(),
                      'nom'=>$co->getNom(),
                      'email'=>$co->getEmail(),
                      'tel'=>$co->getTel(),
                      'age'=>$co->getAge(),
                      'pwd'=>$co->getPwd(),
                      'admin'=>(int)0
                          ));
                          var_dump($co);
      if($res2){
      echo "Le compte a bien été créer.";
      echo '<form action="../Vues/formulaire_connexion.php">
      <input type="submit"  value="Connexion"/><br>
  </form>';
      }
      else {
          echo 'ERREUR';
          echo '<form action="../Vues/formulaire_inscription.php">
          <input type="submit"  value="Retour"/><br>

      </form>';
      }
    }
  }
  public function connexion($co)
  {
    $bddco = new PDO('mysql:host=localhost;dbname=exercicepdo;charset=utf8', 'root', '');
    $reqco = $bddco->prepare("SELECT pwd FROM connexion WHERE pwd = :pwd");
    $reqco->execute(array(
      "pwd"=>$co->getPwd()
    ));
    $resco = $reqco->fetch();
    if($reqco)
    {
      session_start();
      $_SESSION['email'] = $co->getEmail();
      
      header('Location: ../index.php ');
    }
    else {
      echo "erreur";
      echo '<form action="../Vues/formulaire_connexion.php">
      <input type="submit"  value="Retour"/><br>
    </form>';
    }
  }
  public function NavBar()
  {
    if (isset($_SESSION['email']))
    {
      include "include/navbar2.php";
    }
    else {
      include "include/navbar.php";
    }
  }
}
?>
