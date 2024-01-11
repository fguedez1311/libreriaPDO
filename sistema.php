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
    // $updateUser=$objUsuario->updateUser(15,"Felipe Guedez",4249338526,"felipe@gmail.com");
    // echo $updateUser;

    $user=$objUsuario->getUser(15);
    print_r("<pre>");
    print_r($user);
    print_r("</pre>");

    $delete=$objUsuario->deluser(15);
    echo $delete;
?>