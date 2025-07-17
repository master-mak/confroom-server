<?php
\$base_dir = '/var/www/html/meetings/';
\$folder = basename(\$_POST['folder']);
\$target_dir = \$base_dir . \$folder . "/";
if (!is_dir(\$target_dir)) {
    mkdir(\$target_dir, 0775, true);
}
\$target_file = \$target_dir . basename(\$_FILES["fileToUpload"]["name"]);
if (move_uploaded_file(\$_FILES["fileToUpload"]["tmp_name"], \$target_file)) {
    echo "Файл ". htmlspecialchars(basename(\$_FILES["fileToUpload"]["name"])) ." загружен.";
} else {
    echo "Ошибка загрузки.";
}
?>
