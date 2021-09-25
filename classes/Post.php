<?php

class Post{

    private $idpost;
    private $descpost;
    private $datapost;
    private $idimagem;
    private $idusuario;

    public function getIdPost(){
        return $this->$idpost;


    }
    public function setIdPost($id_post){
        $this->idpost = $id_post; 
        
    }
    
    public function getDescPost(){
        return $this->$descpost;


    }
    public function setDescPost($desc_post){
        $this->descpost = $desc_post; 
        
    }
    
    public function getDataPost(){
        return $this->$datapost;


    }
    public function setDataPost($data_post){
        $this->datapost = $data_post; 
        
    }
    
    public function getIdImagem(){
        return $this->$idimagem;


    }
    public function setIdImagem($id_imagem){
        $this->idimagem = $id_imagem; 
        
    }
    public function getIdUsuario(){
        return $this->$idusuario;


    }
    public function setIdUsuario($id_usuario){
        $this->idusuario = $id_usuario; 
        
    }

}





?>