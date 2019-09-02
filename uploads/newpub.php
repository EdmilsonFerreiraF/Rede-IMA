<?php
$file_error = false;
$title = $_GET['title'];
$content = $_GET['content'];
// Get input data and add to body.php
//$ok = file_put_contents('body.php', $resultado, FILE_APPEND);
ob_start();
echo "<h2 class='sections-4__title'>".$title."</h2><br/>";
echo "<p class='sections__text'>".$content."</p><br/></div>";
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<img src='".$target_file."' class='sections__image'><br/></div>";
}
$resultado = ob_get_contents();
$ok = file_put_contents('../body.php', $resultado, FILE_APPEND);
if ($ok) {
    print 'O arquivo foi salvo com sucesso.<br>';
} else {
    print 'Ocorreu um erro. Verifique as permissões. <br/>';
}
header("refresh:5;url=../../profile.php?");
?>
<div>
</div>