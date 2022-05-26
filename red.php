<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>redirect</title>
</head>

<body>
    <p>Vc esta sendo redirecionado para a pagina inicial</p>
    <?php
    if (file_exists("dados.json")) {

        sleep(4);
        header('location /SiteCurso/index.php');
    }
    ?>
</body>

</html>