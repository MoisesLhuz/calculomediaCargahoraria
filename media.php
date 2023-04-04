<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Media::Calculator</title>
	<style>
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: 'Share Tech Mono', monospace;
		}
		body{
			width: 100%;
			height: 100vh;
			display: grid;
			place-items: center;
			background-color: #696969;
		}
		#container{
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			width: 400px;
			height: 400px;
			border-radius: 32px 0px;
			background-color: #C37712;			
		}
		.container-details{
			display: flex;
			align-items: center;
			justify-content: center;
			flex-wrap: wrap;
			position: relative;
			width: 350px;
			height: 350px;
			border-radius: 32px 0px;
			background-color: whitesmoke;		
			padding: 10px;	
		}
		#img{
			position: absolute;
			display: flex;
			align-items: center;
			justify-content: center;
			width: 80px;
			top: 10px;
		}
		.media{
			position: absolute;
			bottom: 100px;
			display: flex;
			justify-content: center;
			align-items: center;						
		}
		.media h3{
			text-align: center;
			color: #C37712;
		}		
		.input{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 2px;
		}
		.input input{
			width: 200px;
			text-align: left;
		}
		.button{
			position: absolute;
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-wrap: wrap;
			width: 150px;
			height: 20px;
			bottom: 75px;	
		}
		.button button{
			color: black;
			border:none;
			border-radius: 4px;
			background: #D3D3D3;
			padding: 5px 10px;
		}
		#menu{
			position: absolute;
			bottom: 30px;		
			text-decoration: none;
			color: black;
			border:none;
			border-radius: 4px;
			background: #D3D3D3;
			padding: 5px 10px;
		}
		.button button:hover{background: #C37712; color: whitesmoke;}
		#menu:hover{background: #C37712; color: whitesmoke;}
		footer{
			position: absolute;
			bottom: 20px;
			text-align: center;
			color: whitesmoke;
		}		

	</style>

</head>
<body>
	<div id="container">
		<div class="container-details">
			<a href="https://github.com/Moiseslhuz" id="img" target="_blank"><img src="./img/logo.png" alt="Logo Moises" id="img"></a>
		
			<div class="media">
				<!-- coleta de dados acumulando na array n[]-->
				<form action="" method="post">
					<h3>Calcule sua Média</h3>
					<div class="input">
						<input type="number" name="n[]" placeholder="Informe a Primeira Nota">
					</div>
					<div class="input">
						<input type="number" name="n[]" placeholder="Informe a Segunda Nota">
					</div>
					<div class="input">
						<input type="number" name="n[]" placeholder="Informe a Terceira Nota">
					</div>
					<div class="input">
						<input type="number" name="n[]" placeholder="Informe a Quarta Nota">
					</div>
			</div>	
			<div class="button">
				<button type="submit" name="enviar">Enviar</button>
				<button type="reset">Limpar</button>
			</div>			
			<a href="index.php" id="menu">Menu</a>			
		</div>		
	</div>
		<?php 
			//se o isset foi iniciado via submit enviar
			if (isset($_POST['enviar'])): 
				//filtra valores recebidos do array
				$notas = array_filter($_POST['n']);

				//soma quantos elementos tem na array
				$somanotaElementos = count($notas);
				//soma o valor total do array
				$somaNotas = array_sum($notas);

				//equação para gerar o resultado
				$results = $somaNotas / $somanotaElementos;
				
				//mostra o resultado
				echo "<font color='#F5F5F5'>Total da Soma das Notas: ".$somaNotas. "</font>" ;
				echo "<font color='#F5F5F5'>Sua Média é: ".$results. "</font>";
			endif;			
		 ?>
	</form>
	<footer>
		<p>&copy; - 2023 Todos os direitos reservados.</p>
	</footer>	
</body>
</html>