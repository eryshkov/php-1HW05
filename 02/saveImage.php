<?php
$isSuccess = false;
$imageName = ' ';

if (isset($_FILES['image'])) {
    $savedImage = $_FILES['image'];

    if (0 === $savedImage['error']) {
        $savedImagePath = $savedImage['tmp_name'];
        $imageName = $savedImage['name'];
        $imageMimeType = $savedImage['type'];
        $isImage = strpos($imageMimeType, 'image') === 0;
        if ($isImage) {
            $isSuccess = move_uploaded_file($savedImagePath, __DIR__ . '/img/' . $imageName);
        }
    }
}

if ($isSuccess) {
    header('Location:' . '/02/');
    exit;
} elseif (!$isImage) {
    ?>Загруженный файл не является изображением<?php
}else{
    ?>Не удалось сохранить файл <?php echo $imageName;?>на сервере<?php
}