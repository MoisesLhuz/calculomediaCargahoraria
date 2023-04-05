<?php 
	//se o isset for iniciado via submit enviar
	if (isset($_POST['enviar'])):

		//trazemos os dados preenchidos via post
		$nomeAluno = $_POST['nomeAluno'];
		$cargaHoraria = $_POST['cargaHoraria'];
		$taxaAprovacao = $_POST['taxaAprovacao'];
		$faltasAluno = $_POST['faltasAluno'];

		//equação para definir o % de aprovação do usuario de acordo com a carga horaria	
		$resultsCargaHoraria = ($taxaAprovacao/100) * $cargaHoraria;
		//equação para definir o resto da carga horaria
		$restodaCargaHoraria = $cargaHoraria - $resultsCargaHoraria;
		//equação para definir o % de faltas do aluno 
		$resultsFaltas = ($faltasAluno / $cargaHoraria) * 100;

		//estrutura de decição e impressão de resultados		
?>
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
		footer{
			position: absolute;
			bottom: 20px;
			text-align: center;
			color: black;
		}
		#menu{
			position: absolute;
			bottom: 90px;		
			text-decoration: none;
			color: black;
			border:none;
			border-radius: 4px;
			background: #D3D3D3;
			padding: 5px 10px;
		}
		#menu:hover{background: #C37712; color: whitesmoke;}
	</style>
</head>
<body>
	<!--Mostrando resultado-->
	<div id="container">
		<div class="container-details">
			<a href="https://github.com/Moiseslhuz" id="img" target="_blank"><img src="./img/logo.png" alt="Logo Moises" id="img"></a>
			<div>
				<?php 
					if($resultsFaltas > $restodaCargaHoraria){
					?>
					<p>Aluno <strong><?php echo "$nomeAluno"; ?> Reprovado por Faltas!!</strong></p>
					<p>Percentual de faltas: <?php echo "$resultsFaltas"; ?>%</p>
					<p>Carga Horaria do Curso: <?php echo "$cargaHoraria"; ?>h</p>
					<p>Taxa de Aprovação <?php echo "$taxaAprovacao"; ?>%: <?php echo "$resultsCargaHoraria";  ?>%</p>
					<p>Necessário para Aprovação: <?php echo "$restodaCargaHoraria"; ?>%</p>
				<?php 
					}else{
				?>
					<p>Aluno <strong><?php echo "$nomeAluno"; ?> Aprovado!!</strong></p>
					<p>Percentual de faltas: <?php echo "$resultsFaltas"; ?>%</p>
					<p>Carga Horaria do Curso: <?php echo "$cargaHoraria"; ?>h</p>
					<p>Taxa de Aprovação <?php echo "$taxaAprovacao"; ?>%: <?php echo "$resultsCargaHoraria";  ?>%</p>
					<p>Necessário para Aprovação: <?php echo "$restodaCargaHoraria"; ?>%</p>
				<?php 
				}endif;
				?>												
			</div>				
			<a href="index.php" id="menu">Menu</a>
		</div>
		
		<div class="comments">
			<a href="https://github.com/Moiseslhuz" target="_blank">My GitHub</a>
		</div>			
	</div>
	<footer>
		<p>&copy; - 2023 Todos os direitos reservados.</p>
	</footer>	
</body>
</html>		


