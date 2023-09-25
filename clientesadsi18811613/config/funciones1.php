<?php
include("database.php");
if ($_POST['TIPO']=="LISTAR"){
	$sql = "SELECT Idcliente,Cedula,Nombres,Apellidos,Telefono,Ciudad,Idciudad from cliente order by Idcliente"; 
    $tabla="<div class='box-body'><table id='detalle1' class='table table-bordered table-striped table-condensed'>
                 <thead>
                        <tr>
                          <th>Cedula</th>
                          <th>Nombres</th>
						  <th>Apellidos</th>
						  <th>Telefono</th>
						  <th>Ciudad</th>
						  <th>Idciudad</th>
                        </tr>
                 </thead>
                 <tbody>";
        $result=mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $datos="";
	if ($count>0) { 
		while($row = mysqli_fetch_row($result)){
                $datos=$datos."<tr>
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td>
					<td>".$row[3]."</td>
					<td>".$row[4]."</td>
					<td>".$row[5]."</td>
					<td>".$row[6]."</td>
                    <td>
                       <button type='submit' name='ADMINISTRAR' onClick='Administrar_C(".$row[0].")'>Administrar</button>
                     </td>
                    </tr>";
            }
            $tabla=$tabla.$datos;
            echo $tabla."</tbody></table> <br> <b>Total de Registros: </b>".$count;
			mysqli_close($con);	
	}else{
		echo "<b>No existen registros de clientes creados.</b>";
		}
}//FIN FUNCION LISTAR CLIENTES

if ($_POST['TIPO']=="NUEVO"){
	//$sql = "insert into cliente(Cedula,Nombres,Apellidos,Telefono,Idciudad) values('".$_POST['CEDULA_C']."','".$_POST['NOMBRES_C']."', '".$_POST['APELLIDOS_C'].", '".$_POST['TELEFONO_C']." )";
	$sql = "INSERT INTO cliente (Cedula, Nombres, Apellidos, Telefono, Ciudad, Idciudad) VALUES ('".$_POST['CEDULA_C']."', '".$_POST['NOMBRES_C']."', '".$_POST['APELLIDOS_C']."', '".$_POST['TELEFONO_C']."', '".$_POST['CIUDAD_C']."', '".$_POST['IDCIUDAD_C']."')";
	mysqli_query($con, $sql);
	mysqli_close($con);		
}//FIN FUNCION NUEVO REGISTRO DE CLIENTES

if ($_POST['TIPO']=="CARGAR"){ 
$Cedula = $_POST['CEDULA'];
$sql = "select Idcliente,Cedula,Nombres,Apellidos,Telefono,Ciudad,Idciudad from cliente where Idcliente=".$Cedula;
$result=mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if ($count>0) {
	echo"
		<table width='' border='0' cellspacing='0' cellpadding='1'>
		<tr bgcolor='##FF8C00' align='center'>
		<td><b><font color='#FF8C00'>Matriz Crud</font></b></td>
		</tr>
		<tr bgcolor='##FF8C00'>
		<td>
		<table width='100%' border='0' cellspacing='0' cellpadding='4'>
	";
	while($row = mysqli_fetch_row($result)){
		echo"
			<tr bgcolor='#FFFFFF'>
			<td>
				<b>Cedula: </b> <br>
				<input type='text' id='CEDULA_C' value='".$row[1]."'><br>
				<b>Nombres: </b> <br>
				<input type='text' id='NOMBRES_C' value='".$row[2]."'><br>
				<b>Apellidos: </b> <br>
				<input type='text' id='APELLIDOS_C' value='".$row[3]."'><br>
				<b>Telefono: </b> <br>
				<input type='text' id='TELEFONO_C' value='".$row[4]."'><br>
                <b>Ciudad: </b> <br>
				<input type='text' id='CIUDAD_C' value='".$row[5]."'><br>
				<b>Idciudad: </b> <br>
				<input type='text' id='IDCIUDAD_C' value='".$row[6]."'><br>
			</td>
			</tr>
			<tr bgcolor='#FFFFFF'>
			<td>
				<button type='submit' class='alert-primary' name='MODIFICAR_C' onClick='Modificar_C(".$row[0].")'>Modificar</button>
				<button type='submit' class='alert-warning' name='ELIMINAR_C' onClick='Eliminar_C(".$row[0].")'>Eliminar</button>
			</td>
			</tr>
		";
		}
	echo"
		</table>
		</td>
		</tr>
		</table>
	";	
	}else{
		echo "Error al realizar la consulta en la base de datos. Consulte a soporte técnico.";
		}
mysqli_close($con);
}//FIN FUNCION CARGAR CLIENTES

if ($_POST['TIPO']=="MODIFICAR"){ 
$Idcliente = $_POST['CEDULA'];
$Cedula = $_POST['CEDULA_C'];
$Nombres = $_POST['NOMBRES_C'];
$Apellidos = $_POST['APELLIDOS_C'];
$Telefono = $_POST['TELEFONO_C'];
$Ciudad = $_POST['CIUDAD_C'];
$Idciudad = $_POST['IDCIUDAD_C'];
$sql = "update cliente set Cedula='".$Cedula."', Nombres='".$Nombres."', Apellidos='".$Apellidos."', Telefono='".$Telefono."', Ciudad='".$Ciudad."',Idciudad='".$Idciudad."' where Idcliente=".$Idcliente;
mysqli_query($con, $sql);
mysqli_close($con);	
}//FIN FUNCION MODIFICAR CLIENTE

if ($_POST['TIPO']=="ELIMINAR"){ 
$Idcliente = $_POST['CEDULA'];
$sql = "delete cliente.* from cliente where Idcliente=".$Idcliente;
mysqli_query($con, $sql);	
mysqli_close($con);	
}//FIN FUNCION ELIMINAR CLIENTE
?>