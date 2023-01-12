<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="processa.php" method="post" enctype="multipart/form-data">

        <label for="">Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu Nome">
        <label for="">Idade:</label>
        <input type="text" name="idade" placeholder="Digite sua Idade">
        <label for="">Email:</label>
        <input type="text" name="email" placeholder="Digite seu Email">
        <button type="submit" name="submeter">Enviar</button>
    </form>
</body>

</html>