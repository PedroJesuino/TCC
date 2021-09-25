<?php
session_start();


       require_once 'global.php';

 
        $conexao = Conexao::pegarConexao();

       
       try{ 
           $user = new Usuario();
           $listadados =  $user->logar();
     

       if((isset($_POST['email']))  && (isset($_POST['pass']))){

            $usuario =  $_POST['email'];
            $senha = $_POST['pass'];
       

           
                foreach($listadados as $row ){
                    if($row['emailusuario'] == $usuario && $row["pass_user"] == $senha){
                    
                        $_SESSION["nome"] = $row['nomeusuario'];
                        header("Location: perfil.php");
                        

                    }
                 
        
                  
                  
                }
            



       }else{
           $_SESSION['loginErro'] = "Usuário ou senha invalido";
       }

    }catch(PDOException $e){
        
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();

}












?>