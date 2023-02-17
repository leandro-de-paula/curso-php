<div class="titulo">Upload</div>

<style>
    input,button {
        font-size: 1.2rem;
    }
</style>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <button type="submit">To Send</button>
</form>


<?php 
ini_set('display_errors', true);
error_reporting(E_ALL); 

echo "<pre>";
print_r($_FILES);
echo "</pre>";

if ($_FILES && $_FILES['file']){
    echo "ok<br>";

    $uploadFolder = "api/upload_folder/";
    if (!is_dir($uploadFolder)) {
        mkdir($uploadFolder, 0755);
        echo "Created Folder";
    }

    $fileName = $_FILES['file']['name'];
    $file = $uploadFolder.$fileName;
    $tmp = $_FILES['file']['tmp_name'];

    if (move_uploaded_file($tmp,$file)) {
        echo "File valid and sent successfully";
    } else {
        echo "File upload error";
    }


} else {
    echo "no";
}

echo "<br>";
