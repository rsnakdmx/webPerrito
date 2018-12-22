<?php
    define('HOST','127.0.0.1');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','proteco');

    if(!$register = new mysqli(HOST,USER,PASSWORD,DATABASE)){
        echo $register->errno;
    }
    $nombre = $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $direccion= $_POST['direc'];
    $email= $_POST['email'];
    $telefono= $_POST['telefono'];

    $query = "INSERT INTO interesado(nombre,apellidos,direccion,email,telefono)
                VALUES('$nombre','$apellido','$direccion','$email','$telefono')";

    if($result=$register->query($query)){
        echo "Guardado correctamente";
        header('Location: index.html');
    }else{
        echo "Error al guardar";
    }
?>
