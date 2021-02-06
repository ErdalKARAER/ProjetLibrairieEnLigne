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
  echo "erreur, cet email est déjà utilisé";
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
      echo '<form action="../Vues/form_connexion.php">
      <input type="submit"  value="Connexion"/><br>
  </form>';
      }
      else {
          echo 'ERREUR';
          echo '<form action="../Vues/form_inscri.php">
          <input type="submit"  value="Retour"/><br>

      </form>';
      }
    }
  }
  public function connexion($co)
  {
    $bddco = new PDO('mysql:host=localhost;dbname=projetbibliotheque;charset=utf8', 'root', '');
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
      echo '<form action="../Vues/form_connexion.php">
      <input type="submit"  value="Retour"/><br>
    </form>';
    }
  }
  public function modifiation($co)
  {

    if(isset($_POST['ins'])) {

        $bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'root', '');
        $req = $bdd->prepare("UPDATE user SET nom=:nom, prenom=:prenom, age=:age,metier=:metier,pays=:pays  WHERE id = :id");
        $res = $req->execute(array('nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'age' => $_POST['age'],
            'metier' => $_POST['metier'],
            'pays' => $_POST['pays'],
            'id' => $_POST['id']));


        if ($res) {

            echo 'Modification effectuée';
            echo '<form action="espace_membre.php.php">
        <input type="submit"  value="Retour"/><br>

    </form>';

        } else {

            echo 'erreur';
            echo '<form action="modifier.php.php">
        <input type="submit"  value="Retour"/><br>

    </form>';

        }
    }
}
}
?>
