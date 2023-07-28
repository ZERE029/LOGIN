<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="cub.css">
    <title>Login</title>
    <script src="zere.js"></script>
</head>

<body>
    <div class="login">
        <h1>Faça seu login</h1>
        <form action="consultar.php" method="POST">
            <input type="text" name="nome" placeholder="Email" required maxlength="25"><br /><br />
            <input type="password" name="senha" placeholder="Senha" required maxlength="20"> <br /><br />
            <input class="btn btn-success" type="submit" value="cadastrar">
            <input class="btn btn-danger" type="reset" value="limpar">
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>