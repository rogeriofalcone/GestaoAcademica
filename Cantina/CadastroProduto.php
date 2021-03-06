<html>
<head>
	<meta charset = "UTF-8">
	<title>Cadastro de Produtos</title>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">  
  <link href="dist/css/bootstrap.css" rel="bootstrap">
  <link href="dist/css/bootstrap-theme.css" rel="bootstrap-theme">
  <link rel="stylesheet" href="dist/css/justified-nav.css">
  <link rel="stylesheet" href="dist/css/estilo.css">

  <script src="dist/js/bootstrap.js"></script>  
  <script src="dist/js/bootstrap.min.js"></script>  
  <script src="dist/js/npm.js"></script>    
  <link rel="icon" href="favicon.ico">
</head>
<body>  
  <div class="container">
    <!-- Menu principal -->
      <div class="masthead">
        <h1>Cantina da Universidade Koala</h1>
        <div role="navigation">
          <ul class="nav nav-justified">            
            <li><a href="MenuPrincipal.php">Home</a></li>
            <li class="active"><a href="CadastroProduto.php">Produtos</a></li>
            <li><a href="ListarCategoria.php">Categorias de produtos</a></li>
            <li><a href="Cardapio.php">Cardápio</a></li>
            <li><a href="ControleVendas.php">Vendas</a></li>                
          </ul>
        </div>
      </div>  

    <form class="form-signin" role="form" method = "POST" action = "php/contolador_produto.php?acao=cadastrar">
        <h2 class="form-signin-heading">Cadastre os produtos</h2>        
        <input type="text" id="cod_produto" name="cod_produto" class="form-control" placeholder="Código do produto" required autofocus>
        <label for="cod_produto" class="sr-only">Código do produto</label>
        <label for="desc_produto" class="sr-only">Descricao</label>
        <input type="text" id="desc_produto" name="desc_produto" class="form-control" placeholder="Descricao" required>        

        <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
      </form>
    <form>    
  </div>
</body>
</html>