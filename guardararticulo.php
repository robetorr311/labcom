<?php 
	include('config.php');
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $tipo_articulo = $_POST['tipo_articulo'];
    $query = "INSERT INTO articulo (nombre,modelo,id_marca,id_tipoarticulo) VALUE ('".$nombre."','".$modelo."',".$marca.",".$tipo_articulo.")";
    if(mysqli_query($conexion, $query)){
        echo json_encode(['status' => 200,'swal' => 'Guardado correctamente']);
    }
    else{
        echo json_encode(['status' => 500,'swal' => 'Parece que hubo un problema intentando guardar el articulo, por favor intenta nuevamente mas tarde!']);
    } 
?>