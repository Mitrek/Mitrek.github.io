<!DOCTYPE html>
<html>
	<head>
		<title>Ovo de Colher</title>
		<link rel='stylesheet' type='text/css' href='stylesheet.css'>
		<script src="jquery-3.1.1.js"></script>
		<script src=script.js> </script>

	</head>
	
	<body>
			<div id = "main">
				<h1>OVO DE COLHER</h1>
				<form>						
					<div id="size">
						<h2> Tamanho: </h2>
						<input type='radio' name = 'size' id = 'size1' value="15" checked="checked"><label for="size1"> 250 gramas </label></input>
						<br>
						<input type='radio' name = 'size' id = 'size2' value="18"><label for="size2"> 350 gramas </label></input>
						<br>
						<input type='radio' name = 'size' id = 'size3' value="21"><label for="size3"> 500 gramas </label></input>
						<br>
						<h2> Chocolate: </h2>			
						<input type='radio' name = 'choco' value="0" checked="checked"><label for="size1"> Chocolate Preto </label></input>			
						<br>						
						<input type='radio' name = 'choco' value="2" ><label for="size3"> Chocolate Branco </label></input>			
						<br>
					</div>
					<div id="fill">
						<h2> Recheio: </h2>
						<input type='radio' name = 'fill' value="prestigio"><label> Prestígio </label></input>
						<br>
						<input type='radio' name = 'fill' value="maracuja"><label> Creme de Maracujá </label></input>						
						<br>												
						<input type='radio' name = 'fill' value="morango"><label> Geleia de Morango </label></input>						
						<br>						
						<input type='radio' name = 'fill' value="nutella"><label> Nutella com Leite Ninho </label></input>						
						<br>						
						<input type='radio' name = 'fill' value="bemcasado" checked="checked"><label> Bem Casado </label></input>						
						<br>						
						<input type='radio' name = 'fill' value="goiabada"><label> Bem Casado de Goiaba </label></input>						
						<br>						
						<input type='radio' name = 'fill' value="gourmet"><label> Gourmet </label></input>				
						<br>						
						<input type='radio' name = 'fill' value="limao"><label> Mousse de Limão </label></input>						
						<br>						
						<input type='radio' name = 'fill' value="oreo"><label> Brigadeiro com Oreo </label></input>						
						<br>						
						<input type='radio' name = 'fill' value="romeuejulieta"><label> Romeu e Julieta </label></input>						
						<br>
					</form>
					</div>
					
					<br>
					<div id="promocode">
					<h2>Código promocional</h2>
					<form id ="tinput">
						<input id='pcode' maxlength='10'></input>
					</form>	
					</div>
					<br>
					<br>
					<input type='submit' value='Fazer o pedido'>
				<figure id="wallet">
				<img src="wallet.png" id = "walletpng"> </img>		
				<figcaption id="money">R$26,90</figcaption>
			</figure>
			</div>

	</body>