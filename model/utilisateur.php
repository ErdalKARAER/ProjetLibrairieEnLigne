<?php

class utilisateur{

  private $nom;
  private $prenom;
  private $age;
  private $email;
  private $tel;
  private $pwd;
  private $admin;


  public function __construct($donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }

  public function getAge()
  {
    return $this->age;
  }
  public function getNom()
  {
    return $this->nom;
  }
  public function getPrenom()
  {
    return $this->prenom;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function getTel()
  {
    return $this->tel;
  }
  public function getPwd()
  {
    return $this->pwd;
  }
  public function getAdmin()
  {
    return $this->admin;
  }


  public function setNom($nom){
    if (is_string($nom))
    {
      $this->nom = $nom;
    }
  }
    public function setPrenom($prenom){
      if (is_string($prenom))
      {
        $this->prenom = $prenom;
      }
    }
      public function setAge($age){
          $this->age = (int)$age;
      }

      public function setEmail($email){
        if (is_string($email))
        {
          $this->email = $email;
        }
      }
      public function setTel($tel){
        if (is_string($tel))
        {
          $this->tel = $tel;
        }
      }
      public function setPwd($pwd){
        if (is_string($pwd))
        {
          $this->pwd = $pwd;
        }
      }
      public function setAdmin($admin){
          $this->admin = (int)$admin;
      }

}
?>
