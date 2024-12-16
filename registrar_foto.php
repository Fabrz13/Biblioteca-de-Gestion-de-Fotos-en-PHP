<?php
    include_once("conexion.php");
?>
<?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    if(isset($_POST['enviar'])){
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if(strlen($_POST["id"]) >=1 && strlen($_POST["descripcion"]) >=1){
           $id=trim($_POST["id"]);
           $descripcion=trim($_POST["descripcion"]);
           $foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
           $consulta="INSERT INTO `biblioteca`(`id`, `descripcion`, `foto`) VALUES ('$id','$descripcion','$foto')";
           $result = mysqli_query($conn, $consulta);
        }
    }
    header("Location: index.php");
?>

