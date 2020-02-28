<?php 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	<style>
.carousel-inner{
      width: 65%; 
	 
	  margin: auto;  
	    
  }
  #estado{
	
   -webkit-appearance: none; 
   width: 270px; /* Tamanho do select, maior que o tamanho da div "div-select" */
      height:32px; 
	  border-radius:4px;
  }
  
  #objetivo{
	  width:300px;
	  height:100px;
  }

	</style>
<!-- navbar cabeçalho -->
<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Fastwork</a>
    </div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Redes Sociais</a></li>
      <li><a href="#">Quem Somos</a></li>
      <li><a href="#">Contato</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
<!-- titulo da pagina -->
<div class="col-md-12" id="titulo" style="text-align: center;"> 
<h1>Crie seu Curriculo com Agilidade.</h1>
<p>Rapidez e Qualidade, ja são mais de 18.000.000 de ususarios.</p>  
</div>

<!-- carousel  após o titulo -->
<div class="row">
<div class="container">
 <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active" >
        <img src="img/img1.png" alt="Los Angeles" style="width:100%; height: 50%;">
      </div>

      <div class="item">
        <img src="img/img2.png" alt="Chicago" >
      </div>
    
      <div class="item">
        <img src="img/img3.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<br><br>
<!-- titulo para iniciar -->
<div class="row">
	<div class="col-md-12" style="text-align:center;">
<h2 >Vamos la ?</h2>
</div>
</div><br><br>
<!-- campos para os dados -->
<div class="row">
<form action="/action_page.php">
    <div class="col-md-3">
      <label for="nome">Nome</label>
      <input type="nome" class="form-control" id="nome" placeholder="Ex: José Silva" name="nome">
	</div>
	<div class="col-md-3">
      <label for="data">Data de Nascimento</label>
      <input type="date" class="form-control" id="data"  name="data">
	</div>
	
	<div class="col-md-3">
      <label for="data">Estado</label><br>
<select name="estado" id='estado'> 
    <option value="estado">Selecione o Estado</option> 
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Ceará</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Espírito Santo</option> 
    <option value="go">Goiás</option> 
    <option value="ma">Maranhão</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Pará</option> 
    <option value="pb">Paraíba</option> 
    <option value="pr">Paraná</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piauí</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rondônia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">São Paulo</option> 
    <option value="to">Tocantins</option> 
</select>

	</div>
	<div class="col-md-3">
      <label for="name">Cargo</label>
      <input type="text" class="form-control" placeholder="Ex: Gestor de TI" id="cargo"  name="cargo">
	</div>
</div><br><br>

<div class="row"> 

<div class="col-md-3">
      <label for="name">Descreva seu Objetivo</label>
	  <input type="text" class="form-control"  id="objetivo"  name="objetivo">
	</div>
</div><br><br>



</div>

</body>
</html>
