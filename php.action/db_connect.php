<?php 
//Conectando com o banco de dados

$localhost="127.0.0.1";
$username="root";
$password="";
$dbname="enem";

//criar minha conexão

$connect = new mysqli($localhost,$username,$password,$dbname);

//checar a conexão

if($connect->connect_error){
	die("A conexão falhou".$connect->connect_error);
}else{
	//echo("Minha Conexão foi realizada com Sucesso");
}

?>