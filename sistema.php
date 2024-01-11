<?php
      require_once ('Autoload.php');
      $objUsuario=new Usuario();
    
    $insert=$objUsuario->insertUsuario("Francisco",4148831308,"fguedez1311@gmail.com");
    echo $insert;
    
    
?>