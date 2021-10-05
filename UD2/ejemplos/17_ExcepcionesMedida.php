<?php
class emailException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error en la línea '.$this->getLine().' del fichero '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> no es una dirección válida de correo';
    return $errorMsg;
  }
}

$email = "someone@example...com";

try {
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    throw new emailException($email);
  }
}
catch (emailException $e) {
  echo $e->errorMessage();
}