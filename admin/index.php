<?php
session_start();

include_once('../includes/connection.php');

if (isset($_SESSION['logged_in'])) {
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>IMA - Administrador</title>
    <link href="../css/style.css">
</head>

<body>
    <section class="sections__articles">
        <a href="index.php" id="logo">CMS</a>

        <br />

        <ol>
            <li><a href="add.php">Adicionar Artigo</a></li>
            <li><a href="delete.php">Deletar Artigo</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ol>

    </section>
</body>

</html>
<?php
} else {
    if (isset($_POST['username']) || ($_POST['password'])) {
        $custo = '12';
        $salt = 'Cf1f11ePArKlBJomM0F6aJ';
        isset($_POST['username']) ? $username = $_POST['username'] : null;
        isset($_POST['password']) && strlen($_POST['password']) > 0 ? $password = crypt($_POST['password'], '$2a$' . $custo . '$' . $salt . '$') : null;
        if (empty($username) or empty($password)) {
            $error = "Todos os campos são obrigatórios!";
        } else {
            $query = $pdo->prepare("SELECT * FROM users WHERE user_name = ? AND user_password = ?");

            $query->bindValue(1, $username);
            $query->bindValue(2, $password);

            $query->execute();

            $num = $query->rowCount();

            if ($num == 1) {
                $_SESSION['logged_in'] = true;

                header("Location: index.php");
                exit();
            } else {
                $error = 'Usuário ou senha incorreta';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>IMA - Administrador</title>
    <link href="../css/style.css">
</head>

<body>
    <section class="sections__articles">
        <a href="index.php" id="logo">CMS</a>

        <br><br>

        <?php if (isset($error)) { ?>
        <small style="color:#aa0000;"><?php echo $error;?></small>
        <br><br>
        <?php } ?>

        <form action="index.php" method="POST">
            <input type="text" name="username" placeholder="Usuário">
            <input type="password" name="password" placeholder="Senha">
            <input type="submit" value="Login">
        </form>

    </section>
</body>

</html>
<?php } ?>