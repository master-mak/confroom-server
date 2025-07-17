<?php
$target_dir = '/var/www/html/meetings/';
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Файл " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " загружен.";
} else {
    $error_code = $_FILES["fileToUpload"]["error"];
    echo "Ошибка загрузки файла. Код: $error_code";
}
?>
