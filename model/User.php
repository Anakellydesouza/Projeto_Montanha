<?php


class User{
       private $nome      ;
       private $email     ;
       private $cidade    ;
       private $estado    ;
       private $profissao ;
       private $tipo      ;
    
        function __construct($nome, $email, $cidade, $estado, $profissao, $tipo){
          $this->nome =        $nome;  
          $this->email =       $email ;  
          $this->cidade =      $cidade ;  
          $this->estado =      $estado ;  
          $this->profissao =   $profissao ;  
          $this->tipo =        $tipo ;  

        }
         public function set_nome($nome){
             $this->nome = $nome;
         }
         public function set_email($email){
             $this->$email=$email;
         }
         public function set_cidade($cidade){
             $this->cidade=cidade;
         }
         public function set_estado($estado){
             $this->estado=$estado;
         }
         public function set_profissao($profissao){
             $this->profissao=$profissao;
         }
         public function set_tipo($tipo){
             $this->tipo=$tipo;
         }
         
         public function get_nome(){    
             return $this->nome;              
         }
         public function get_email(){    
             return $this->email;              
         }
         public function get_cidade(){   
             return $this->cidade;             
         }
         public function get_estado(){   
             return $this->estado;              
         }
         public function get_profissao(){
             return $this->profissao ;             
         }
         public function get_tipo(){     
             return $this->tipo ;             
         }
             
                
        private function validar_nome(){
            
            if(!is_string($this->nome))
                return false;
            if(strlen($this->nome)==0 || strlen($this->nome)>45 )
                return false;
            
            return true;
        }
    
    
      public function is_valid(){
            
            if(!$this->validar_nome($this->nome)) return false;
        
            
            return true;
            
            
            
        }
      
}


?>