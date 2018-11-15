<!DOCTYPE html>
<html>
<head>
	<script src="/TESIS/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/TESIS/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/TESIS/includes/estilos.css">	
	<title>Evaluacion practica</title>
</head>
<body>

<header><center><img src="/TESIS/imagenes/logouda.png" width="50%"></center></header>


<div class="container">
	<div class="panel panel-default"  >
	    <div class="panel-heading"><h3><b>CERTIFICADO DE PRACTICA PROFESIONAL</b></h3></div>
		<div class="panel-body" id="tabla">
			<!-- Datos Alumno -->
			<b>1.-	IDENTIFICACION</b></br>
			<div> </div>
			<div class="row">
				<div class="col-md-3">RUT: <input type="text" class="form-control" name=""></div>
				<div class="col-md-3">Nombre Completo: <input type="text" class="form-control" name=""></div>
				<div class="col-md-3">Ciudad: <input type="text" class="form-control" name=""></div>
				<div class="col-md-3">Domicilio Particular: <input type="text" class="form-control" name=""></div>
			</div>
			<div> </div>
			<div class="row">
				<div class="col-md-3">Fono: <input type="text" class="form-control" name=""></div>
				<div class="col-md-3">Carrera: <select class="form-control" id="carrera" name="carrera">
					<option>Tecnologo en Informatica</option>
				</select></div>
				<div class="col-md-3">Semestre: <select class="form-control" id="carrera" name="semestre">
					<option>4 semestre</option>
				</select></div>
				<div class="col-md-3">Año de Egreso: <input type="text" class="form-control" name=""></div>
			</div>
			<div> </div>


			<b>2.-	PRACTICA EFECTUADA EN</b>
			<div> </div>
			<div class="row">
				<div class="col-md-3">Empresa o Compañía: <input type="text" class="form-control" name=""></div>
				<div class="col-md-3">Gerencia /Sub-Gerencia: <input type="text" class="form-control" name=""></div>
				<div class="col-md-3">Depto./Sección: <input type="text" class="form-control" name=""></div>
				<div class="col-md-3">Nombre y Ubicación Faena: <input type="text" class="form-control" name=""></div>
			</div>
			<div> </div>
			<div class="row">
				<div class="col-md-3">Fecha de Inicio: <input type="date" class="form-control" name=""></div>
				<div class="col-md-3">Fecha de Termino: <input type="date" class="form-control" name=""></div>
				
			</div>
			<div> </div>


			<b>3.-	DETALLE DE TAREAS DESARROLLADAS</b>
			<div> </div>
			<div class="row">
				<div class="col-md-12"><textarea class="form-control" rows="4" id="detalle"  ></textarea></div>
			</div>
			<div> </div>
			

			<b>4.-	EVALUACION DEL COMPORTAMIENTO</b> (Marcar lo que corresponda)
			<div> </div>
			<div class="row">
				<div class="col-md-1"> </div>
				<div  class="col-md-5 container">4.1.	CUMPLIMIENTO E INICIATIVA <label class="radio">
					<input type="radio" name="opt1" checked>Espera que le asignen trabajo y le enseñen como hacerlo.</label>
					<label class="radio"><input type="radio" name="opt1">Inicia sus tareas, pero se atiene a la ayuda ajena.</label>
					<label class="radio"><input type="radio" name="opt1">Acomete sus trabajos hábil y correctamente.</label>
					<label class="radio"><input type="radio" name="opt1">Busca soluciones e investiga para realizar un trabajo óptimo.</label> 
				</div>
				<div  class="col-md-5">4.2.	COOPERACION <label class="radio">
					<input type="radio" name="opt2" checked>Rehuye responsabilidades.</label>
					<label class="radio"><input type="radio" name="opt2">Coopera solo cuando le conviene.</label>
					<label class="radio"><input type="radio" name="opt2">Generalmente coopera con los demás.</label>
					<label class="radio"><input type="radio" name="opt2">Siempre coopera, se interesa por el bien de toda la organización.</label> 
				</div>
			</div>
			<div> </div>
			<div class="row">
				<div class="col-md-1"> </div>
				<div  class="col-md-5 container">4.3.	ADAPTABILIDAD <label class="radio">
					<input type="radio" name="opt3" checked>Se adapta con vacilación y resistencia.</label>
					<label class="radio"><input type="radio" name="opt3">Generalmente se adapta, pero con dificultad.</label>
					<label class="radio"><input type="radio" name="opt3">Se adapta a diversas circunstancias con poca dificultad.</label>
					<label class="radio"><input type="radio" name="opt3">Se adapta fácilmente y sin esfuerzo.</label> 
				</div>
				<div  class="col-md-5">4.2.	COOPERACION <label class="radio">
					<input type="radio" name="opt4" checked>Rehuye responsabilidades.</label>
					<label class="radio"><input type="radio" name="opt4">Coopera solo cuando le conviene.</label>
					<label class="radio"><input type="radio" name="opt4">Generalmente coopera con los demás.</label>
					<label class="radio"><input type="radio" name="opt4">Siempre coopera, se interesa por el bien de toda la organización.</label> 
				</div>
			</div>
			<div> </div>
			<div class="row">
				<div class="col-md-12">4.4.	OBSERVACIONES ADICIONALES
					<textarea class="form-control" rows="4" id="detalle"  ></textarea>

				</div>
			</div>
			<div>Certifica que se ha cumplido con la Práctica Profesional, de acuerdo a las exigencias de la Universidad y se le asigna la siguiente calificación:</div>
			<div class="row">
				<div class="col-md-1"></div>
					<div  class="col-md-5"><label class="radio">
					<input type="radio" name="opt5" checked>1)  EXCELENTE</label>
					<label class="radio"><input type="radio" name="opt5">2)  BUENA</label>
					<label class="radio"><input type="radio" name="opt5">3)	REGULAR</label>
					<label class="radio"><input type="radio" name="opt5">4)	DEFICIENTE</label> 
				</div>
			</div>
		</div>
		
		<div class="row">
		<div class="col-md-2"> </div>
		<div class="col-md-4"><center><button type="button" class="btn btn-warning">Listo</button></center></div>
		<div class="col-md-4"><center><button type="button" class="btn btn-warning">Volver</button></center></div>
		<div class="col-md-2"> </div>

		</div>
		<div> </div>
		</div>
	</div>
</div>



<script src="/TESIS/includes/js/jquery-1.11.2.js"></script>
<script src="/TESIS/includes/js/bootstrap.js"></script>
</body>
</html>