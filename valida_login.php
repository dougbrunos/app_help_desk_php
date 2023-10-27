<?php

    session_start();

    //verifica se autenticado
    $autenticado = false;

    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => '123'),
    );

    foreach($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $autenticado = true;
        }

    }

    echo '<br>';

    if($autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = 'valor';
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }


    /*
    print_r($_GET);
    echo '<br>';
    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senha'];    
    */

     /*
    print_r($_POST);

    echo '<br>';
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['senha'];
    */  
?>