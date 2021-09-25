<?php

 class Usuario { 

    private $idusuario;
    private $nomeusuario;
    private $emailusuario;
    private $user_pass;
    private $username;
    private $idpost;
    private $idtelefone;


        public function getIdUsuario(){
            return $this->$idusuario;

        }
        public function setIdUsuario($id){
            $this->idusuario = $id;
            
        }
        public function setNomeUsuario($nome){
            $this->nomeusuario = $nome;
        
        }
        public function getNomeUsuario(){
            return $this->nomeusuario;

        }
        public function setEmailUsuario($email){
            $this->emailusuario = $email;
    
        }
        
        public function getEmailUsuario(){
            return $this->emailusuario;
        } 
        public function setUsername($user_n){
            $this->username = $user_n;

        }
        public function getusername(){
            return $this->nomeusuario;

        }
        public function setUser_pass($pass){
            $this->user_pass = $pass;

        }
        public function getUser_pass(){
            return $this->user_pass;

        }
        public function setIdPost($post){
            $this->idpost = $post;

        }

        public function getIdPost(){
            return $this->$dpost;

        }
                public function setIdTelefone($telefone){
                    $this->idtelefone = $telefone;
        
                }
        public function getIdTelefone(){
            return $this->idpost;

        }

        
        public function cadastrarUsuario($user){

            $conexao = Conexao::pegarConexao();

            $stmt = $conexao->prepare("INSERT INTO tbusuario(nomeusuario, emailusuario, pass_user, username)
            VALUES(?,?,?,?)");

            $stmt->bindValue(1, $user->getNomeUsuario());
            $stmt->bindValue(2, $user->getEmailUsuario());
            $stmt->bindValue(3, $user->getUser_pass());
            $stmt->bindValue(4, $user->getusername());

            $stmt->execute();
        }
        public function logar(){

            $conexao = Conexao::pegarConexao();

             $query = "SELECT nomeusuario, emailusuario, pass_user FROM tbusuario";
             $resultado = $conexao->query($query);
             $lista = $resultado->fetchAll();
             return $lista;
        }

       


        


 

      


     

 }


?>