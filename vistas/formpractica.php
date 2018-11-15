<!DOCTYPE html>
<html>
<head>
	<title>Practicas</title>
	<script src="/TESIS/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/TESIS/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/TESIS/includes/estilos.css">	
</head>
<body>
<header><center><img src="/TESIS/imagenes/logouda.png" width="50%"></center></header>
<div class="container">
<div> </div>

<!-- Boton ingreso practica -->	
<div class="row">
<div class="col-md-9"></div>
<div class="col-md-3"><button type="button" class="btn btn-warning btn-pract" data-toggle="modal" data-target="#agprac" name="">
  Ingresar Nueva Practica
</button></div>
<div> </div>

<!-- Tabla de practicas -->
<div class="container">
	<div class="panel panel-default"  >
	    <div class="panel-heading"><h3>Lista de Usuarios</h3></div>
		<div class="panel-body" id="tabla">
			
		</div>
	</div>
</div>
</div>


      <!-- Formulario modal de ingreso de practica -->
<div class="modal fade" id="agprac" tabindex="-1" role="dialog" aria-labelledby="agpracLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="agpracLabel">Ingrese Datos de la Practica</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
       <form id="formu" method="POST">
				<div class="input-group">
			    <input type="text" class="form-control" placeholder="Ingrese RUT del Alumno" name="ralum">
			    <div class="input-group-btn">
			      <button class="btn btn-default" name="inga" id="inga" type="submit">
			        Ingresar
			      </button>
			    </div>
			  
				</div>
				<div class="row">
					<div class="col-md-12"> </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
	  					<label for="usr">Nombre:</label>
	  					<input type="text" class="form-control" id="nom" name="nom" placeholder="Ej:Ana">
					</div>
					<div class="form-group col-md-6">
	  					<label for="usr">Apellidos:</label>
	  					<input type="text" class="form-control" id="ap" name="ap" placeholder="Ej:Castillo Cerda">
					</div>
				<div class="row">
					<div class="col-md-3"> </div>
					<div class="col-md-6"><select class="form-control" id="carrera" name="carrera">
						<option value=1>Tecnologo en informatica</option>
					</select></div>
					<div class="col-md-3"> </div>
				</div>	
					
				</div>
				<div class="row">
					<div class="col-md-12"> </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
  						<label for="usr">Nombre supervisor practica:</label>
  						<input type="text" class="form-control" id="con" placeholder="Ingrese Nombre" name="con">
					</div>
					<div class="form-group col-md-6">
  						<label for="usr">Empresa donde se realizara la practica:</label>
  						<input type="text" class="form-control" id="con2" placeholder="Ingrese empresa" name="con2">
					</div>
				</div>
			</form>
			<div id="resultado"></div>
      
    </div>
  </div>
</div>


<!-- Funcion para llamar a la lista -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load("listapract.php");
	});
</script>

<script src="/TESIS/includes/js/jquery-1.11.2.js"></script>
<script src="/TESIS/includes/js/bootstrap.js"></script>
</body>
	
</html>