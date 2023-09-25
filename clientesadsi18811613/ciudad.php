<?php
 include("./config/database.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administracion Modulo Ciudad</title>
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
        		<div class="sidebar-brand-text"><h1>Administrar Modulo Ciudad</h1></div>
            <div>
        </div>
        <div class="row" style="background-color:#ffffff">
        	<div class="col-6" align="center">
                <div id="ciudad_l"></div>
            </div>
            <div class="col-5">
                <br>
                <table width='' border='0' cellspacing='0' cellpadding='1'>
                    <tr bgcolor='#8C0FF0' align='center'>
                    <td><b><font color='#ffffff'>CIUDAD</font></b></td>
                    </tr>
                    <tr bgcolor='#8C0FF0'>
                    <td>
                        <table width='100%' border='0' cellspacing='0' cellpadding='4'>
                        <tr bgcolor='#ffffff'>
                        <td>
                            <b>Ciudad: </b> <br>
                            <input type='text' id='Ciudad_Cliente' value='' placeholder='Ingrese Ciudad'><br>
							<b>Pais: </b> <br>
							<input type='text' id='Pais_Cliente' value='' placeholder='Ingrese Pais'><br>
							<b>Imagen: </b> <br>
							<input type='file' id='Imagen_Cliente' name='Imagen_Cliente' accept='image/*'><br>
							<b>Idimagen: </b> <br>
							<input type='text' id='Idmagen_Cliente' name='Idmagen_Cliente'><br>
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
                    <div id="ciudad_2"></div>
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
			url: "./config/funciones2.php",
			data: parametros,
			success: function(a) {
				$('#ciudad_l').html(a);
			}
		});
}
function Administrar_C(Ciudad){
		var parametros = {
			"CIUDAD": Ciudad,
			"TIPO":"CARGAR"
			}
		$.ajax({
			type: "POST",
			url: "./config/funciones2.php",
			data: parametros,
			success: function(a) {
				$('#ciudad_2').html(a);
			}
		});
		}
		function Agregar_C() {
			console.log ($("#Imagen_Cliente")[0].files[0]);
    var parametros = {
     	"CIUDAD_C": $("#Ciudad_Cliente").val(),
   		"PAIS_C": $("#Pais_Cliente").val(),
   		"IMAGEN_C": $("#Imagen_Cliente")[0].files[0],
		"IDIMAGEN_C":$("#Idimagen_Cliente").val(),
    	"TIPO":"NUEVO"
	}
    $.ajax({
        type: "POST",
        url: "./config/funciones2.php",
        data: parametros,
        success: function (a) {
            cargar();
            alert("El registro fue creado satisfactoriamente.");
            $("#Ciudad_Cliente").val('');
            $("#Pais_Cliente").val('');
            $("#Imagen_Cliente").val('');
			$("Idimagen_Cliente").val('');
        },
        error: function (xhr, textStatus, errorThrown) {
         console.log (ok);
			// Manejar errores aquí si es necesario
        }
    });
}

function Modificar_C(Ciudad){
		var parametros = {
			"CIUDAD": Ciudad,
			"CIUDAD_C": $("#CIUDAD_C").val(),
			"PAIS_C": $("#PAIS_C").val(),
			"IMAGEN_C": $("#IMAGEN_C").val(),
			"IDMAGEN_C": $("#IDMAGEN_C").val(),
			"TIPO":"MODIFICAR"
			}
		$.ajax({
			type: "POST",
			url: "./config/funciones2.php",
			data: parametros,
			success: function(a) {
				$('#ciudad_2').html('');
				cargar();
				alert("El registro ha sido modificado con éxito.");
			}
		});
		}
function Eliminar_C(Cedula){
		var parametros = {
			"CIUDAD": Ciudad,
			"TIPO":"ELIMINAR"
			}
		$.ajax({
			type: "POST",
			url: "./config/funciones2.php",
			data: parametros,
			success: function(a) {
				$('#ciudad_2').html('');
				cargar();
				alert("El registro ha sido eliminado con éxito.");
			}
		});
		}
</script>
