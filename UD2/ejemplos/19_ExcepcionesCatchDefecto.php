<?php

//catch por defecto
$email = "someone@example...com";
$age = "-5";
$condition = true; 
try {
  if ($condition) {
    throw new Exception("excepción por que sí!");
  }
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    throw new emailException($email);
  }
  throw new ageException($age);
    if($age < 0) {
  }
}
catch (emailException $e) {
  echo $e->errorMessage();
}
catch (ageException $e) {
  echo $e->errorMessage();
}
catch (Exception $e) {
  echo $e;
}