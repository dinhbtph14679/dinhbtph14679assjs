<?php
$ROOT_URL = "/DUAN1";
$VIEW_PAGE = 'index.php';
$PATH_IMG = $_SERVER['DOCUMENT_ROOT'] . $ROOT_URL . "/Image";
// hàm upload file
function upload_file($file, $path_dir)
{
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $path_file_dir = $path_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $path_file_dir);
    return $file_name;
}

?>