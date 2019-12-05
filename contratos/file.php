<form>
<input id="my-input" type="file" name="file" enctype="multipart/form-data" method="post" action="">
<img src="" id="my-img">
<button id="btnGuardar" type="submit" class="btn btn-primary btn-sm my-0">Guardar</button>
</form>

<script>
    var formData = new FormData($("#my-input")[0]);
    $.ajax({
        url:'file.php',
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            if (response != 0) {
                $('#my-img').attr('src',response);
            } else {
                alert('NO, imagen incorrecto.');
            }
        }
    });
</script>

<?php 
if (isset($_FILES["file"]))
{

    $file = $_FILES["file"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "./img/proveedores/"; //carpeta donde se guardara el archivo 

    $src = $carpeta.$nombre;
    if(move_uploaded_file($ruta_provisional, $src))
    {
        echo $src;
    }
    else{
        echo 0;
    }

}
?>