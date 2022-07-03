<?php
 session_start();
 
 if(isset($_GET['shop']) && $_GET['shop'] == "true"){
 	if(!isset($_COOKIE['shop'])){
 	 setcookie("shop", "rocketmc");	
  }
 	header("Location:?");
 }elseif(isset($_GET['shop']) && $_GET['shop'] == "false"){
 	if(isset($_COOKIE['shop'])){
 	 setcookie("shop", null);
  }
 	header("Location:?");
 }
 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>WalkerNetwork - Servidor MC:PE</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="menu-itens">
	<center>
	 <div class="list">
		<div class="shop">		
		<div class="post produtos">
		
		<i id="close" class="fas fa-times btnclose"></i>
		<br>
		
			<span id="title">Produtos</span><br><br><div class="line"></div>

			<div class="produto">
			 <span id="title">MVP<br><span id="small-text">Leve agora por R$5,00</span></span>
			 <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=428392094-c398cdbb-f9b4-4e1e-9164-7545dfc5b244"><button class="button"><i class="fas fa-shopping-cart"></i></button></a>
			</div>

			<div class="produto">
			 <span id="title">MVP+<br><span id="small-text">Leve agora por R$10,00</span></span>
			 <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=428392094-cf9e4741-6553-414f-ba5e-bc5db4d3b23e"><button class="button"><i class="fas fa-shopping-cart"></i></button></a>
			</div>
			
			<div class="produto">
			 <span id="title">100-Gold<br><span id="small-text">Leve agora por R$3,00</span></span>
			 <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=428392094-0d3622b4-cc21-4181-a74f-7767f477ef9d"><button class="button"><i class="fas fa-shopping-cart"></i></button></a>
			</div>
			
			<div class="produto">
			 <span id="title">250-Gold<br><span id="small-text">Leve agora por R$6,00</span></span>
			 <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=428392094-f0165e3d-991c-407c-9d81-1bc07b81ed46"><button class="button"><i class="fas fa-shopping-cart"></i></button></a>
			</div>		
			
			<span id="text">Todos as compras são feitas pelo MercadoPago</span>
			
		</div>
		</div>
		</div>
	</center>
	</div>	
	
	<div class="menu">
		<div class="info">
		 <span class="logo">WalkerNetwork</span><br><span class="playing">0 jogando...</span>
		</div>
		
		<div class="btns">
		 <i id="open" class="fas fa-shopping-cart btn"></i>
		</div>
		
	</div>
	<br>
	<center>
		
		<div class="itens">
		
		<div class="post comprovante">
			<span id="title">Comprovante</span><br><br>
			<span id="desc">Digite o comprovante do produto abaixo</span>
			<?php
			 if(isset($_SESSION['msg'])){
			 	echo "<br><br>".$_SESSION['msg'];
			 	unset($_SESSION['msg']);			
			 }
		 ?>
			<br><br>
			<form method="post" action="active.php">
				<input type="text" name="nick" placeholder="Seu nickname no jogo...">
				<input type="number" name="comprovante" placeholder="Ex: 1234567890">
				<input class="button" type="submit" value="ATIVAR PRODUTO">
			</form>
		</div>		
	
		<div class="posts">
			
			<div class="post">
				<span id="title">Publicação...</span>
				<img src="img/attv0.1.jpg">
				<span id="post-by">
					<img src="img/pig.png">
					F0und_
				</span>
				<span id="text">
					Publicação...Publicação...Publicação...<br>Publicação...
<br>...Publicação...
				</span>
			</div>
			
		</div>
		</div>
					
	<div class="footer"><br>
		<span id="logo">WalkerNetwork</span><br><br>
		<span>Todos os direitos reservados...</span><br><br>
		<i id="tw" class="fab fa-twitter"></i>
		<i id="yt" class="fab fa-youtube"></i>
	</div>
	
	</center>
	
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>

 $("#open").click(function(){
	 $(".menu-itens").show();
 });

 $("#close").click(function(){
	 $(".menu-itens").hide();
 });

</script>
</html>