<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Formulário</title>
</head>

<body>
    <header>
        <div class="titulo">
        <h1>Formulário</h1>
        </div>
    </header>
     <section>
        <form action="validacao.php" method="post">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Digite aqui...">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deixe sua duvida</label>
                <textarea class="form-control" name="duvida" id="exampleFormControlTextarea1" rows="3" placeholder="Digite aqui..."></textarea>
            </div>
            <div class="bnt">
                         <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-success">Limapr </button>
            <a href="/SiteCurso/index.php" class="btn btn-success">Voltar</a>
            </div>
   


        </form>
        </section>

</body>

</html>