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
			background-color: whitesmoke;
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
			top: 5px;
		}
		.carga{
			position: absolute;
			bottom: 100px;
			display: flex;
			justify-content: center;
			align-items: center;						
		}
		.carga h3{
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
			color: black;
		}
	</style>
</head>
<body>
	<div id="container">
		<div class="container-details">
			<a href="https://github.com/Moiseslhuz" id="img" target="_blank"><img src="./img/logo.png" alt="Logo Moises" id="img"></a>
			<div class="carga">
				<!--coleta de dados via form-->
				<form action="resultsCarga.php" method="post">
				
					<h3>Calcule a Carga Horária</h3>
					<div class="input">
						<input type="text" name="nomeAluno" placeholder="Digite seu Nome">
					</div>
					<div class="input">
						<input type="number" name="cargaHoraria" placeholder="Carga Horária">
					</div>
					<div class="input">
						<input type="number" name="taxaAprovacao" placeholder="% para Aprovação">
					</div>
					<div class="input">
						<input type="number" name="faltasAluno" placeholder="Quantidade de Faltas">
					</div>
			</div>
			<div class="button">
				<button type="submit" name="enviar">Enviar</button>
				<button type="reset">Limpar</button>
			</div>
			<a href="index.php" id="menu">Menu</a>
			</form>			
		</div>
	</div>	
	<footer>
		<p>&copy; - 2023 Todos os direitos reservados.</p>
	</footer>
</body>
</html>