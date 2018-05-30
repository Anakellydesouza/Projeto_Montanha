<?php
require 'model/User.php';
require '../model/BancoDeDados';

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$profissao = $_REQUEST['profissao'];
$tipo_user = $REQUEST['tipoUser'];


$user = new User($nome, $email, $cidade, $estado, $profissao, $tipo_user);
if($user->is_valid()){
    $db = new BancoDeDados('localhost','root','','sysDB');
    //echo $user->is_valido(); 
    $user->inserir_usuario($nome, $email, $cidade, $estado, $profissao, $tipo_user);
}
else{
    echo "Dados Incorretos!!";
}

?>