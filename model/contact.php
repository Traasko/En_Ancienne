<?php
class contact {
  private $nom;
  private $email;
	private $sujet;
  private $message;

  public function __construct($nom, $email, $sujet, $message){

      $this->setnom($nom);
      $this->setemail($email);
			$this->setsujet($sujet);
      $this->setmessage($message);
}
  public function setnom($nom){
    $this->nom = $nom;
  }
  public function setemail($email){
    $this->email = $email;
  }

  public function setsujet($sujet){
    $this->sujet = $sujet;
  }

  public function setmessage($message){
    $this->message = $message;
  }

  public function getnom(){
    return $this->nom;
  }
  public function getemail(){
    return $this->email;
  }
  public function getsujet(){
    return $this->sujet;
  }
  public function getmessage(){
    return $this->message;
  }
}

?>
