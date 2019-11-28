<?php
require_once("config/conexao_bd.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Optativa</title>
		<meta charset="utf-8">

		<script src="./js/jquery-3.3.1.slim.min.js" ></script>
		<script src="./js/bootstrap_js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		
	
	   


	</head>
	<body >

		 <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav" style="background: white">

		        <a class="navbar-brand" href="?pg=inicio">Louis Vuitton</a >
		        
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarCollapse" style="background: blue">
		          <ul class="navbar-nav mr-auto" style="background: white">
		            <li class="nav-item active">
		              <a class="nav-link" href="?pg=inicio">Início<span class="sr-only"></span></a>
		            </li>	
		            <li class="nav-item">
		              <a class="nav-link" href="?pg=cadastro">Cadastrar Produtos</a>
		            </li>	    
		            <li class="nav-item">
		              <a class="nav-link" href="?pg=listagem">MostrarProdutos</a>
		            </li>		          
		          </ul>
		        </div>
      		</nav>	
		
	  	<header class="masthead">
	    	<div class="container">
	        	<div class="intro-text">	        		
	      		</div>
	    	</div>
	    </header>

		<main role="main" style="background: white">
			<?php
				if(isset($_GET["pg"])){
					$pagina = $_GET["pg"];
				}
				else{
					$pagina = "inicio";
				}				
				include("paginas/".$pagina.".php");
			?>
		</main>

		
		<footer class="footer">
		    <div class="container">
		    	<div class="row align-items-center">
		    		<div class="col-md-4">
		        		
		        	</div>
		       </div>
		    </div>
		</footer>
	</body>
</html>