<?php

    require_once 'global.php';


    try{
        
   
      

            $user = new Usuario();
            $user->setNomeUsuario($_POST['name']);
            $user->setEmailUsuario($_POST['email']);
            $user->setUsername($_POST['username']);
            $user->setUser_pass($_POST['pass']);


            echo $user->cadastrarUsuario($user);

            header("Location: login.php");
      


    }catch(PDOException $e){
        
            echo '<pre>';
                print_r($e);
            echo '</pre>';
            echo $e->getMessage();

    }



?>