<?php
include("conectar.php");	
include("functions.php");
?>
<!doctype html>
<head>
<meta charset="utf-8">
<style>
.w3-input-group label,.w3-input-group input{float:left !important; padding-top:5px;}.w3-input-group input[type='submit']{margin:10px;float:right !important;}
</style>
<title>Tela inicial</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body class="w3-container">
<header class="w3-container w3-teal">
<div class="w3-dropdown-click">
  <button onclick="myFunction()" class="w3-btn">Menu</button>
  <div id="Demo" class="w3-dropdown-content w3-black w3-card" style="position: absolute; z-index: 9999">
   <a href="index.php?url=1">Cliente</a>
   <a href="index.php?url=3">Relatório</a>
   <a href="index.php?url=4">Link3</a>
  </div>
</div>
<script>
function myFunction() {
    document.getElementById("Demo").classList.toggle("w3-show");
}
</script>
</header>
<div class="w3-row w3-center" style="min-height:400px;">
  <div class="w3-col m12 w3-padding w3-animate-top">
   <?php  add_fileByURL(); ?>
  </div>
</div>

<div class="w3-container w3-teal">
<p>Desenvolvido por: Paulo Leonardo da Silva Cassimiro</p>
</div>
</body>
</html> 
