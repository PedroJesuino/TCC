<?php



       require_once 'global.php';

 
        $conexao = Conexao::pegarConexao();

       
       try{ 
           $user = new Usuario();
           
     

       if((isset($_POST['email']))  && (isset($_POST['pass']))){


                $usuario =  $_POST['email'];
                $senha = $_POST['pass'];
                
                $query = "SELECT * FROM tbusuario WHERE emailusuario='$usuario' AND pass_user='$senha'";
                $resultado = $conexao->query($query);
                $row = $resultado->rowCount();

           
            

           
            
                    if($row == 1){

                        $usuario = $resultado->fetchAll();
                        session_start();
                        foreach($usuario as $dados){
                            $_SESSION["user_name"] = $dados["nomeusuario"]; 
                        }
                        header("Location: perfil.php");
                      
                       

                        

                    }else{
                        session_start();
                        $_SESSION['loginErro'] = "Usuário ou senha invalido";
                        header("Location: login.php");
                        
                       


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