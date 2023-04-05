<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Calculo de media e carga horaria para alunos em geral">
	<meta name="keywords" content="HTML, CSS, PHP, media, faltas, carga horaria, calcular media escolar,calcular carga horaria, calcular media, calcular carga horaria, calcular faltas">
	<meta name="author" content="Moises Luz">
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
		.comments{
			display: flex;
			justify-content: center;
			align-items: center;
			position: absolute;
			bottom: 40px;
		}
		.comments a{
			border: none;
			padding: 1px 5px;
			border-radius: 4px;			
			text-decoration: none;
			color: black;
			background: #D3D3D3;
		}
		.comments a:hover{background: #C37712; color: whitesmoke;}

		.media{
			display: flex;
			justify-content: center;
			align-items: center;
		}		
		.media a{
			position: absolute;
			align-items: center;
			padding: 10px 20px;
			border: none;
			border-radius: 6px;
			text-decoration: none;
			top: 150px;
			background: #D3D3D3;
			color: black;			
		}
		.cargahoraria{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.cargahoraria a{
			position: absolute;
			padding: 10px 20px;
			border: none;
			text-decoration: none;
			border-radius: 6px;
			bottom: 100px;		
			background: #D3D3D3;
			color: black;
		}
		.cargahoraria a:hover{background:  #C37712; color: whitesmoke;}
		.media a:hover{background:  #C37712; color: whitesmoke;}
		
		footer{
			position: absolute;
			bottom: 20px;
			text-align: center;
			color: black;
		}
	</style>
</head>
<body>
	<!--Container inicial contendo os links para redirecionamento-->
	<div id="container">
		<div class="container-details">
			<a href="https://github.com/Moiseslhuz" id="img" target="_blank"><img src="./img/logo.png" alt="Logo Moises" id="img"></a>
	
			<div class="media">
				<a href="media.php">Calcule a Média</a>	
			</div>				
			<div class="cargahoraria">
				<a href="cargaHoraria.php">Calcule a Carga Horária</a>				
			</div>
				
			</div>
			<div class="comments">
				<a href="https://github.com/Moiseslhuz" target="_blank">My GitHub</a>
			</div>			
		</div>
	</div>
	<footer>
		<p>&copy; - 2023 Todos os direitos reservados.</p>
	</footer>
</body>
</html>