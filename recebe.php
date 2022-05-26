<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>recebendo Dados do php</title>
</head>

<body onload="verificacao()">
    <h1>Dados recebidos</h1>
    <a href="/SiteCurso/index.php" class="btn btn-primary">pagina inicial</a>

    <?php
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['duvida'];

    $contato = array(
        "Nome:" => $nome,
        "E-mail:" => $email,
        "Mensagem" => $msg
    );

    $arquivo = 'dados.json';
    $json = json_encode($contato);
    $file = fopen('dados.json', "w");
    fwrite($file, $json);
    fclose($file);
    
    if (file_exists("dados.json")) {
      sleep(2);
       header('location /SiteCurso/red.php');  
    }    
    

    
    ?>

</body>

</html>