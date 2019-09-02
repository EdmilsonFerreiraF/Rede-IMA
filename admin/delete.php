<?php
session_start();

include_once('../includes/connection.php');
include_once('../includes/article.php');

$article = new Article;

if (isset($_SESSION['logged_in'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = $pdo->prepare('DELETE FROM articles WHERE article_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        header('Location: delete.php');
    }
    $articles = $article->fetch_all();
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

        <br /><br>

        <h4>Selecione um artigo para deletar:</h4>

        <form action="delete.php" method="get">
            <select name="id" id="" onchange="this.form.submit();">
                <option value="Artigos:">
                </option>
                <?php foreach ($articles as $article) {?>
                <option value="<?php echo $article['article_id'];?>">
                    <?php echo $article['article_title']?>
                </option>
                <?php } ?>
            </select>
        </form>

    </section>
</body>

</html>
<?php
} else {
    header('Location: index.php');
}
?>