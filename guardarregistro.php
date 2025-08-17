<?php 
	include('config.php');
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $cedula = $_POST['cedula'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
    $id_tipo = $_POST['id_tipo'];
    $query = "INSERT INTO usuarios (id_tipo,nombre,clave,email,direccion,telefono,cedula) VALUE (".$id_tipo.",'".$nombre."','".hash('sha256', $password)."','".$email."','".$direccion."','".$telefono."','".$cedula."')";
    if(mysqli_query($conexion, $query)){
        echo json_encode(['status' => 200,'swal' => 'Te has registrado correctamente']);
    }
    else{
        echo json_encode(['status' => 500,'swal' => 'Parece que hubo un problema intentando guardar el registro, por favor intenta nuevamente mas tarde!']);
    } 
?>