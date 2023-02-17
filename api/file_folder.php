<div class="titulo">Exemplo Arquivo e Pasta</div>

<?php
ini_set('display_errors', 1);

$folder = 'folder';

if (!is_dir($folder)) {
    mkdir($folder,0755);
} 

$fileName = date('Y-m-d-H-i-s') . '_challenge' . '.txt';
echo 'Generated File Name: ' . $fileName;
$file = fopen($fileName,'w+');
fwrite($file, 'Minha Linha 1' . PHP_EOL);
fwrite($file, 'Minha Linha 2' . PHP_EOL);
fwrite($file, "Minha String\nOutra String");
fclose($file);

$moveFile = "{$folder}/{$fileName}";
rename($fileName,$moveFile);

echo "<br>Read File<hr>";
if (file_exists($moveFile) && is_file($moveFile)) {
    $readFile = fopen($moveFile, 'r');
    while (!feof($readFile)) {
        echo fgets($readFile) . "<br>";
    }    
    fclose($readFile);
}

echo "<br>Another way<hr>";
if (file_exists($moveFile) && is_file($moveFile)) {
    echo file_get_contents($moveFile);
}
echo "<br>";

echo "<br>Number of Files<hr>";
$numberOfFiles = scandir($folder);
echo count($numberOfFiles);
// var_dump(scandir($folder));
echo "<br>";

echo "<br>Folder Contents<hr>";
if (is_dir($folder)) {
    foreach (scandir($folder) as $file) {
        echo $file . PHP_EOL;
        echo "<br>";
    }
}

echo "<br>Delete Files and Folder<hr>";
if (is_dir($folder)) {
    foreach (scandir($folder) as $file) {
        $filePath = "{$folder}/{$file}";

        if (is_file($filePath)) {
            echo $filePath . PHP_EOL;
            echo "<br>";
            unlink($filePath);
        }
    }

    rmdir($folder);
}


echo "<br>Another Way to Create File<hr>";
$fileName = "file.txt";
file_put_contents($fileName,'<p>Hello World!</p>');
echo file_get_contents($fileName);
echo "<br>";

echo "<br>Creating a Copy<hr>";
copy($fileName, "file2.txt");
