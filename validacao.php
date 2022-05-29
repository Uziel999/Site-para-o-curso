<html>
<?php


//recebendo do formulario
$nome = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['duvida'];
$erro = false ;

//validaçao do nome
if(empty($nome) OR !strstr($nome,' ')){
echo "Digite seu nome";
}else{
    header('location  /SiteCurso/recebe.php' );
}

?>
<button><a href="/SiteCurso/formulario.php">Voltar</a></button>
</html>