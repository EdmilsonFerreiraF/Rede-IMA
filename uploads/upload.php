<?php
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
        // header("HTTP/1.1 303 See Other");
        header("Location:uploads/newpub.php/?title=$_SESSION[title]&content=$_SESSION[content]");
        print 'O site foi atualizado com sucesso.<br>';
        //Refreshing page
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
    if($check !== false) {
        echo "O arquivo é uma imagem - " . $check["mime"] . ". ";
        $uploadOk = 1;
    } else if (!$check) {
        echo "Nenhuma imagem foi enviada. ";
    } else {
        echo "O arquivo não é uma imagem. ";
        $uploadOk = 0;
    }
}
// File input DEFINITION
$target_dir = "uploads/";

if (isset($_FILES['fileToUpload'])) {
    $_FILES['fileToUpload'] = $_FILES['fileToUpload'];
} else {
    $_FILES['fileToUpload'] = false;
}

if (isset($_FILES['name'])) {
    $_FILES['name'] = $_FILES['name'];
} else {
    $_FILES['name'] = false;
}

if (isset($_FILES['size'])) {
    $_FILES['size'] = $_FILES['size'];
} else {
    $_FILES['size'] = false;
}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$img_src = "uploads/".$_FILES["fileToUpload"]["name"];
// $content = isset($_SESSION['content']) ? isset($_SESSION['content']) : false;
// $title = isset($_SESSION['title']) ? isset($_SESSION['title']) : false;

// Adm Panel input DEFINITION
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $_SESSION['title'] = $title;
}

if (isset($_POST['content'])) {
    $content = $_POST['content'];
    $_SESSION['content'] = $content;
}

// Define variables and set to empty values
$title = $content = "";

if ($title && $content){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = test_input($_POST["title"]);
        $content = test_input($_POST["content"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if file already exists
if (file_exists($target_file) && !$check) {
    echo "Desculpe, o arquivo já existe. <br/>";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "O arquivo é grande demais. <br/>";
    $uploadOk = 0;
}

// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Desculpe, apenas arquivos JPG, JPEG, PNG & GIF são permitidos. ";
$uploadOk = 0;
} */

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 && !$check) {
    echo "Desculpe, o seu arquivo não foi enviado. <br/>";
// If everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo " O arquivo ". basename( $_FILES["fileToUpload"]["name"]). " foi enviado.";
    } else if (!$check){
        echo "Desculpe, houve um erro ao enviar o arquivo. <br/>";
    }
}
?>