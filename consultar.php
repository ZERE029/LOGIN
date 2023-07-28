<?php
include("conexao.php");
if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $mysqli->query("INSERT INTO tabela_login (login,senha)
    values ('$nome', '$senha')")
        or die($mysqli->error);
}
?>
<?php
  $consultar_banco = "SELECT * FROM tabela_login";

  $retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
  $quantidade_pedidos = $retorno_consulta->num_rows;
?>
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
    <h1>consultar logins</h1>
    <table class="table table-striped">
        <tr>
            <th>ID:</th>
            <th>Nome:</th>
            <th>senha</th>
        </tr>
        <tr>
            <?php
            while ($logins = $retorno_consulta->fetch_assoc()) {
            ?>
        <tr>
            <td><?php echo $logins['id_login']; ?></td>
            <td><?php echo $logins['login']; ?></td>
            <td><?php echo $logins['senha']; ?></td>
        </tr>
    <?php
            }
    ?>
    </tr>
    </table>
    <a class="btn btn-warning" href="login.php">Voltar para Início</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>