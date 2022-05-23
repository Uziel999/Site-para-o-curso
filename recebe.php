<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebendo Dados do php</title>
</head>

<body>
    <h1>Dados recebidos</h1>

    <?php
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['duvida'];

    echo "<p><b>Nome:</b>".$nome."</p>";
    echo "<p><b>E-mail:</b>".$email."</p>";
    echo "<p><b>Duvida:</b>".$msg."</p>";
    $contato = array ("Nome:"=>$nome, "E-mail:"=>$email,"Mensagem"=>$msg);

    if(file_exists("dados.json")){
        $string = file_get_contents("dados.json");
        $json =json_decode($string,true);
    }
    $json ["contatos"][] = $contato;

    $fp = fopen('dados.php','w');
    if($fp == false){
        print(error_get_last());


        fwrite($fp, json_encode($json));
        fclose ($fp);
    }

    ?>

</body>

</html>