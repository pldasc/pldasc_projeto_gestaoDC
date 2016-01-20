<?php
include("nucleo/pl_class.php");

//Menu principal
$pages = array(
//inicio cliente
1 => "mod/cliente/list_cliente.php",
2 => "mod/cliente/add_cliente.php",
3 => "mod/cliente/view_cliente.php",
//fim cliente
5 => "mod/conta/list_conta.php",
6 => "mod/conta/add_conta.php",
7 => "mod/conta/view_conta.php"
);
function add_fileByURL(){
	$x = new link_include;
	global $pages; $x->menu_topo($pages);}

 function getTime($x){
	 date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y');
    $hora = date('H:i:s');
	if($x == "d" || $x == 1){ return $data;}
	elseif($x == "h" || $x == 2){ return $hora;}
	elseif($x == "dh" || $x == 3){ return $data." ".$hora;}
	}
function moeda($x){
	return "R$".number_format($x,2,",",".");
}
function tipoRestri($x){
	$tipo = array(0 => "00 - Sem restrições", 1 => "01 - Conta bloqueada pelo banco", 2 => "02 - Conta bloqueada por suspeita de falsificação", 3 => "03 - Conta bloqueada provisoriamente", 4 => "04 -  Conta bloqueada por decisão/ação judicial", 5 => "05 - Conta bloqueada por falta de pagamento", 6 => "06 - Conta bloqueada por erro na geração",7 => "07 - Conta bloqueada por saldo prejuízo", 8 => "08 - Conta bloqueada por renegociação de divida ", 9 => "09 - Conta bloqueada por reanalise de credito", 10 => "10 -  Conta bloqueada por risco de credito",11 => "11 -  Conta bloqueada pelo sistema (entrada inválida de dados)",12 => "12 -  Conta encerrada/fechada a pedido cliente", 13 => "13 -  Conta encerrada/fechada pelo banco", 14 => "14 -  Conta encerrada/fechada pelo sistema (saldo abaixo de 0)");
	return $tipo[$x];}
	
function tipoConta($x){
	$tipo = array(1 => "CC (Conta corrente)", 2 => "CP (Conta poupança)", 3 => "CS (Conta salário)", 4 => "CJ (Conta judicial", 5 => "CE (Conta Empresa)", 6 => "CI (Conta investimento)", 7 => "CB (Conta benefício)", 8 =>"CF (Conta financiamento)");
	return $tipo[$x];
} 
function tipoSexo($x){
	$tipo = array(1 => "Masculino", 2 => "Feminino");
	return $tipo[$x];
}
function tCliente($x,$z){
	  global $con;
	  $sql = "SELECT * FROM cliente WHERE id_cliente = '$x'";
	  $query = mysqli_query($con, $sql);
	  $rows = mysqli_num_rows($query);
	  if($rows > 0){
		  while($row = mysqli_fetch_array($query)){
			  $id = $row['id_cliente'];
			  $nome = $row['nome_cliente'];
			  $cpf = $row['cpf_cliente'];
			  $data_nasc = $row['data_nasc_cliente'];
			  $endereco = $row['endereco_cliente'];
			  $sexo = $row['sexo_cliente'];
			  $email = $row['email_cliente'];
			  $telefone = $row['telefone_cliente'];
			  $senha = $row['senha_cliente'];
			  if($z == 0 || $z == "help"){echo "Lista de propriedades:<br> 1 = id<br>2 = nome<br>3 = cpf<br>4 = data de nascimento<br>5 = endereco<br>6 = sexo<br>7 = email<br>8 = telefone<br>";}
			  elseif($z == 1){ return $id;}
			  elseif($z == 2){ return $nome;}
			  elseif($z == 3){ return $cpf;}
			  elseif($z == 4){ return $data_nasc;}
			  elseif($z == 5){ return $endereco;}
			  elseif($z == 6){ return $sexo;}
			  elseif($z == 7){ return $email;}
			  elseif($z == 8){ return $telefone;}
			  elseif($z == 9){ return $senha;}
			  
		  }
	  }else{	  }
}
function _print($x){
	echo $x;
}

?>
