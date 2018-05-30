<?php

class Juizado{
    
    private $juizado_nome;
    private $user_iduser;

       
    function __construct($juizado_nome, $user_iduser) {
        $this->juizado_nome = $juizado_nome;
        $this->user_iduser = $user_iduser;
    }

    public function getJuizado_nome()
    {
        return $this->juizado_nome;
    }


    public function setJuizado_nome($juizado_nome)
    {
        $this->juizado_nome = $juizado_nome;

        return $this;
    }

  
    public function getUser_iduser()
    {
        return $this->user_iduser;
    }

   
    public function setUser_iduser($user_iduser) {
        $this->user_iduser = $user_iduser;
        return $this;
    }

    private function validar_juizado_nome($juizado_nome){
        if(!is_string($this->juizado_nome))
            return false;
        if(strlen($this->juizado_nome)==0 || strlen($this->juizado_nome)>45 )
            return false;

    return true;
    }

  
}

?>