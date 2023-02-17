<div class="titulo">Imagem</div>

<style>
    input,button {
        font-size: 1.2rem;
    }
</style>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <button>To Send</button>
</form>


<?php
ini_set('display_errors', true);
error_reporting(E_ALL); 
// session_start();

$files = $_SESSION['files'] ?? [];

echo "<pre>";
print_r($files);
echo "</pre>";

$uploadFolder = __DIR__ . "/upload_folder/";
$fileName = $_FILES['file']['name'];
$file = $uploadFolder.$fileName;
$tmp = $_FILES['file']['tmp_name'];

if (move_uploaded_file($tmp,$file)) {
    $files[] = $fileName;
    $_SESSION['files'] = $files;
    echo "<br>File valid and sent successfully";
} else {
    echo "<br>File upload error";
}
?>

<ul>
    <?php foreach($files as $file) : ?>
        <li> 
            <?php if (strpos($file,".jpeg") !== false || strpos($file,".png")!== false) : ?>
                <img src="../../curso-php/api/upload_folder/<?= $file ?>" height="120">
            <?php else :?>
                <a href="../../curso-php/api/upload_folder/<?= $file ?>"><?= $file ?></a>
            <?php endif ?>    
        </li>
    <?php endforeach ?>
</ul>
