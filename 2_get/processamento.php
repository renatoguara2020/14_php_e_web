<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="col-auto">
        <form action="processa.php" method="post" enctype="multipart/form-data">

            <label for="" class="form-label">Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu Nome" class="form-control form-control-sm">
            <label for="" class="form-label">Idade:</label>
            <input type="text" name="idade" placeholder="Digite sua Idade" class="form-control form-control-sm">
            <label for="" class="form-label">Email:</label>
            <input type="text" name="email" placeholder="Digite seu Email" class="form-control form-control-sm">
            <br><br>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>