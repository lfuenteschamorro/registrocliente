<?php
 include("./config/database.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administracion Modulo Clientes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
	body{
	background: rgb(133, 127, 133)
 }
 </style>
</head>
<body onLoad="cargar()">
<div class="container-contact100">
    <div class="wrap-contact100">
        <div class="row">
        	<div class="col-12" align="center">
        		<div class="sidebar-brand-text"><h1>Administrar Modulo Clientes</h1></div>
            <div>
        </div>
        <div class="row" style="background-color:#ffffff">
        	<div class="col-6" align="center">
                <div id="clientes_l"></div>
            </div>
            <div class="col-5">
                <br>
                <table width='' border='0' cellspacing='0' cellpadding='1'>
                    <tr bgcolor='#8C0FF0' align='center'>
                    <td><b><font color='#ffffff'>CLIENTES</font></b></td>
                    </tr>
                    <tr bgcolor='#8C0FF0'>
                    <td>
                        <table width='100%' border='0' cellspacing='0' cellpadding='4'>
                        <tr bgcolor='#ffffff'>
                        <td>
                            <b>Cedula: </b> <br>
                            <input type='text' id='Cedula_Cliente' value='' placeholder='Ingrese Cedula'><br>
                            <b>Nombres: </b> <br>
                            <input type='text' id='Nombres_Cliente' value='' placeholder='Ingrese Nombres'><br>
							<b>Apellidos: </b> <br>
							<input type='text' id='Apellidos_Cliente' value='' placeholder='Ingrese Apellidos'><br>
							<b>Telefono: </b> <br>
							<input type='text' id='Telefono_Cliente' value='' placeholder='Ingrese Telefono'><br>
							<b>Ciudad: </b> <br>
							<input type='text' id='Ciudad_Cliente' value='' placeholder='Ingrese Ciudad'><br>
							<b>Idciudad: </b> <br>
							<input type='text' id='Idciudad_Cliente' value='' placeholder='ingresa Idcuidad'><br>
							
                        </td>
                        </tr>
                        <tr bgcolor='#ffffff'>
                        <td>
                            <button class="alert-info" type='submit' name='AGREGAR_C' onClick='Agregar_C()'>Agregar Nuevo</button>
                            
                        </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                    </table>
                    <br>
                    <div id="clientes_2"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type='text/javascript'>
function cargar(){
	var parametros = {
			"TIPO":"LISTAR"
			}
		$.ajax({
			type: "POST",
			url: "./config/funciones1.php",
			data: parametros,
			success: function(a) {
				$('#clientes_l').html(a);
			}
		});
}
function Administrar_C(Cedula){
		var parametros = {
			"CEDULA": Cedula,
			"TIPO":"CARGAR"
			}
		$.ajax({
			type: "POST",
			url: "./config/funciones1.php",
			data: parametros,
			success: function(a) {
				$('#clientes_2').html(a);
			}
		});
		}
function Agregar_C(){
		var parametros = {
			"CEDULA_C": $("#Cedula_Cliente").val(),
			"NOMBRES_C": $("#Nombres_Cliente").val(),
			"APELLIDOS_C": $("#Apellidos_Cliente").val(),
			"TELEFONO_C": $("#Telefono_Cliente").val(),
			"CIUDAD_C": $("#Ciudad_Cliente").val(),
			"IDCIUDAD_C": $("#Idciudad_Cliente").val(),
			"TIPO":"NUEVO"
			}
		$.ajax({
			type: "POST",
			url: "./config/funciones1.php",
			data: parametros,
			success: function(a) {
				cargar();
				alert("El registro fue creado satisfactoriamente.");
				$("#Cedula_Cliente").val('');
				$("#Nombres_Cliente").val('');
				$("#Apellidos_Cliente").val('');
				$("#Telefono_Cliente").val('');
				$("#Ciudad_Cliente").val('');
				$("#Idciudad_Cliente").val('');
				
			}
		});
		}
function Modificar_C(Cedula){
		var parametros = {
			"CEDULA": Cedula,
			"CEDULA_C": $("#CEDULA_C").val(),
			"NOMBRES_C": $("#NOMBRES_C").val(),
			"APELLIDOS_C": $("#APELLIDOS_C").val(),
			"TELEFONO_C": $("#TELEFONO_C").val(),
			"CIUDAD_C": $("#CIUDAD_C").val(),
			"IDCIUDAD_C": $("#IDCIUDAD_C").val(),
			"TIPO":"MODIFICAR"
			}
		$.ajax({
			type: "POST",
			url: "./config/funciones1.php",
			data: parametros,
			success: function(a) {
				$('#clientes_2').html('');
				cargar();
				alert("El registro ha sido modificado con éxito.");
			}
		});
		}
function Eliminar_C(Cedula){
		var parametros = {
			"CEDULA": Cedula,
			"TIPO":"ELIMINAR"
			}
		$.ajax({
			type: "POST",
			url: "./config/funciones1.php",
			data: parametros,
			success: function(a) {
				$('#clientes_2').html('');
				cargar();
				alert("El registro ha sido eliminado con éxito.");
			}
		});
		}
</script>