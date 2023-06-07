<?php

require_once '../model/correo.php';

if(isset($_POST['operacion'])){

  if($_POST['operacion'] == 'enviarcorreo'){
    $salida = enviarEmail($_POST['correodestino'], $_POST['asunto'], $_POST['mensaje']);
    echo json_encode($salida);
  }
}