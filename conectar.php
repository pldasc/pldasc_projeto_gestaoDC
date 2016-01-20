<?php  
$var =  array(
1 => "localhost",2 => "root",3 => "",4 => "gestao"
);
$con =  mysqli_connect($var[1],$var[2],$var[3]) or die(mysqli_error());
mysqli_select_db($con,$var[4]);
if(!$con){echo"Erro ao conectar";}

function set_erro(){
	if(isset($_GET['erro'])){
	$erro = $_GET['erro'];
	msg($erro);}}
function msg($x){
	$tipo = array(
	1=> "Conta criada/aberta com sucesso",
	2=>"Conta fechada/encerrada com sucesso",
	3=>"Conta excluída do sistema com sucesso",
	4=>"Saque realizado com suecesso",
	5=>"Deposito realizado com sucesso ",
	111=>"Conta não pode ser excluída/encerrada, porque o seu saldo está acima de 0",
	112=>"Saldo insuficiente / Saque não autorizado"
	);
    
	if($x >= 0 && $x < 10){echo "<p class='w3-green w3-center w3-border-red w3-animate-right w3-padding'>".$tipo[$x]."</p>";}
	elseif($x >= 100 && $x <= 199){echo "<p class='w3-red w3-center w3-animate-right w3-padding'>".$tipo[$x]."</p>";}
	elseif($x >= 200 && $x <= 300){echo "<p class='w3-red w3-center w3-animate-right w3-padding'>".$tipo[$x]."</p>";}
	
	
     }
?>
