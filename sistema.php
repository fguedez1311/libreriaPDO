<?php
      require_once ('Autoload.php');
      $objUsuario=new Usuario();
    
    // $insert=$objUsuario->insertUsuario("Francisco Eduardo",41456788,"franciscoeduardo@gmail.com");
    // echo $insert;
    // Extrae todos los registros
    $users=$objUsuario->getUsuarios();
    print_r("<pre>");
    print_r($users);
    print_r("</pre>");
    
?>