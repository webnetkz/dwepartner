<?php

$content = '<form enctype="multipart/form-data" action="#" method="POST">
            <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <!-- Название элемента input определяет имя в массиве $_FILES -->
            <input name="userfile" type="file" class="btn"/>
            <br>
            <br>
            <input type="submit" value="Обработать таблицу" class="btn"/>
            </form>';

require_once '../../config.php';

require_once "../../public/components/header.php"; 
require_once "../../public/components/panel.php"; 
require_once "../../public/components/content.php"; 
require_once "../../public/components/footer.php"; 

?>
