<?php
require_once "php/model.php";

if($_POST){
$usu=new games();
$usu->registrar($_POST["name"],
               $_POST["platform"],
               $_POST["stock"],
               $_POST["url"]
               );
        if (isset($_FILES["img"])){
            move_uploaded_file($_FILES["img"]["tmp_name"],"images/uploads/".$_POST['name'].".jpg");
        }
    
header("location:index.php");
    
}
?>



<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>..::Ejemplo de registro de juegos::..</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<h1>Registro de juegos</h1>
    
<label>numbre:</label>
<input type="text" name="name"required>
<hr>
    
<label>plataforma:</label>
<select name="platform">
  <option value="PC">PC</option>
  <option value="STEAM">STEAM</option>
  <option value="ORIGIN">ORIGIN</option>
  <option value="UPLAY">UPLAY</option>
    <option value="PLAYSTATION">PLAYSTATION</option>
    <option value="XBOX">XBOX</option>
</select>
    
<input type="hidden" name="stock" value="1">
    
    <label>image:</label>
<input type="file" accept=".jpg" name="img" required/>

    <label>link:</label>
<input type="text" name="url">
<hr>
<input type="submit" value="Registrar">
</form>
    
</body>
</html>