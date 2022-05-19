<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form-style.css">
    <title>Formulário</title>
</head>

<body>
    <h1>Formulário</h1>
    <section>


        <form action="recebe.php" method="post">

            <div class="nome">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="email">
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="duvida">
                <label for="dvd">Deixe sua duvida aqui:</label>
                <textarea name="duvida" id="" maxlength="50" rows="10" placeholder="Digite aqui..."></textarea>
            </div>
            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
        </form>
    </section>

</body>

</html>