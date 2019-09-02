<?php
session_start();

include_once('../includes/connection.php');

if (isset($_SESSION['logged_in'])) {
    if (isset($_POST['title'], $_POST['content'])) {
        $title = $_POST['title'];
        $content = nl2br($_POST['content']);

        if (empty($title) or empty($content)) {
            $error = "Todos os campos são obrigatórios!";
        } else {
            $image = $_FILES['image']['name'];
            $tmp_dir = $_FILES['image']['tmp_name'];
            $imageSize = $_FILES['image']['size'];

            $upload_dir = '../uploads/';
            $imgExt = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
            $newimage = rand(1000, 1000000).".".$imgExt;

            move_uploaded_file($tmp_dir, $upload_dir.$image);

            $query = $pdo->prepare('INSERT INTO articles (article_title, article_content, article_timestamp, article_image) VALUES (?, ?, ?, ?) ');
            $query->bindValue(1, $title);
            $query->bindValue(2, $content);
            $query->bindValue(3, time());
            $query->bindValue(4, $image);

            $query->execute();

            // header('Location: index.php');
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

        <br />

        <br>

        <h4>Adicionar Artigo</h4>

        <?php if (isset($error)) { ?>
        <small style="color:#aa0000;"><?php echo $error;?></small>
        <br><br>
        <?php } ?>

        <form action="add.php" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Título">
            <textarea name="content" cols="50" rows="15" placeholder="Conteúdo"></textarea>
            <br><br>
            <input type="submit" value="Add Article" name="submit">
            <input type="file" name="image" value="image">
        </form>

    </section>
</body>

</html>
<?php
} else {
    header('Location: index.php');
}
?>