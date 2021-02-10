<?php
session_start();

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
      echo '<form action="../index.php">
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
    $reqco = $bddco->prepare("SELECT pwd FROM connexion WHERE email = :email");
    $reqco->execute(array("email"=>$co->getEmail()));
    $resco = $reqco->fetch();
    if (password_verify($co->getPwd(), $resco['pwd'])) {
      if($resco)
      {
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
  }


  public function modification($co)
  {
        $bddmod = new PDO('mysql:host=localhost;dbname=projetbibliotheque;charset=utf8', 'root', '');
        $reqmod = $bddmod->prepare("UPDATE connexion SET prenom=:prenom, nom=:nom, email=:email, tel=:tel, age=:age  WHERE id = :id");
        $resmod = $reqmod->execute(array('prenom' =>$co->getPrenom(),
        'nom'=>$co->getNom(),
        'email'=>$co->getEmail(),
        'tel'=>$co->getTel(),
        'age'=>$co->getAge(),
        'id' => $_POST['id']));


        if ($resmod){

            echo 'Modification effectuée';
            echo '<form action="../index.php">
        <input type="submit"  value="Retour"/><br>

    </form>';

        } else {

            echo 'erreur';
            echo '<form action="espace_membre.php">
        <input type="submit"  value="Retour"/><br>

    </form>';

        }
    }
}
?>
