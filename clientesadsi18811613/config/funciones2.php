<?php
include("database.php");

if ($_POST['TIPO'] == "LISTAR") {
    $sql = "SELECT * FROM ciudad ORDER BY Idciudad";
    $tabla = "<div class='box-body'><table id='detalle1' class='table table-bordered table-striped table-condensed'>
                 <thead>
                        <tr>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Imagen</th>
							<th>Idimagen</th>
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
								<td>". '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row[3]).'"/>'."</td>
								<td>".$row[4]."</td>
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
}
print_r($_POST);
if ($_POST['TIPO'] == "NUEVO") {
    $Ciudad = $_POST['CIUDAD_C'];
    $Pais = $_POST['PAIS_C'];
    $Imagen = $_POST['IMAGEN_C'];
	$Idimagen = $_POST['IDIMAGEN_C'];
    $sql = "INSERT INTO ciudad (Ciudad, Pais, Imagen,Idimagen) VALUES ('$Ciudad', '$Pais', '$Imagen''Idimagen')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

if ($_POST['TIPO'] == "CARGAR") {
    $Ciudad = $_POST['CIUDAD'];
    $sql = "SELECT * FROM ciudad WHERE Idciudad = $Ciudad";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                <table width='' border='0' cellspacing='0' cellpadding='1'>
                <tr bgcolor='##FF8C00' align='center'>
                <td><b><font color='#FF8C00'>Matriz Crud</font></b></td>
                </tr>
                <tr bgcolor='##FF8C00'>
                <td>
                <table width='100%' border='0' cellspacing='0' cellpadding='4'>
                <tr bgcolor='#FFFFFF'>
                <td>
				    
                    <b>Ciudad: </b> <br>
                    <input type='text' id='CIUDAD_C' value='" . $row[1] . "'><br>
                    <b>Pais: </b> <br>
                    <input type='text' id='PAIS_C' value='" . $row[2] . "'><br>
                    <b>Imagen: </b> <br>
                    <input type='file' id='IMAGEN_C' value='" . $row[3] . "'><br>
					<b>Idimagen: </b> <br>
                    <input type='text' id='IDIMAGEN_C' value='" . $row[4] . "'><br>
                </td>
                </tr>
                <tr bgcolor='#FFFFFF'>
                <td>
                    <button type='submit' class='alert-primary' name='MODIFICAR_C' onClick='Modificar_C(" . $row['Idciudad'] . ")'>Modificar</button>
                    <button type='submit' class='alert-warning' name='ELIMINAR_C' onClick='Eliminar_C(" . $row['Idciudad'] . ")'>Eliminar</button>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                </table>
            ";
        }
    } else {
        echo "Error al realizar la consulta en la base de datos. Consulte a soporte técnico.";
    }

    mysqli_close($con);
}

if ($_POST['TIPO'] == "MODIFICAR") {
    $Idciudad = $_POST['CIUDAD'];
    $Ciudad = $_POST['CIUDAD_C'];
    $Pais = $_POST['PAIS_C'];
    $Imagen = $_POST['IMAGEN_C'];
	$Idimagen = $_POST['IDMAGEN_C'];
    $sql = "UPDATE ciudad SET Ciudad='$Ciudad', Pais='$Pais', Imagen='$Imagen',Idimagen='$Idimagen' WHERE Idciudad=$IdCiudad";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

if ($_POST['TIPO'] == "ELIMINAR") {
    $Idciudad = $_POST['CIUDAD'];
    $sql = "DELETE FROM ciudad WHERE Idciudad=$Idciudad";
    mysqli_query($con, $sql);
    mysqli_close($con);
}
?>