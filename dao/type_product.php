<?php
require_once "pdo.php";
//loai.php sẽ xử lý các hàm dữ liệu cho bảng loai

//Thêm dữ liệu 
function insert_type_products($name_type, $images)
{
    $sql = "INSERT INTO type_products(name_type, images) VALUES(?,?)";
    pdo_execute($sql, $name_type, $images);
}
//Sửa dữ liệu
function update_type_products($id_type,$name_type, $images) {
    $sql = "UPDATE type_products SET name_type=?, images=? WHERE id_type=?";
    pdo_execute($sql, $name_type, $images, $id_type);
}
// Xóa dữ liệu
function delete_type_products($id_type) {
    $sql = "DELETE FROM type_products WHERE id_type=?";
        pdo_execute($sql, $id_type);
}
//Lấy toàn bộ dữ liệu
function type_products_select_all(){
    $sql = "SELECT * FROM type_products";
    return pdo_query($sql);
}
/**
 * Truy vấn 1 bản ghi theo mã loại
 */
function type_products_select_by_id($id_type) {
    $sql = "SELECT * FROM type_products WHERE id_type=?";
    return pdo_query_one($sql, $id_type);
}
//Kiểm tra sự tồn tại của loại hàng
// function type_products_exist($id_type)
// {
//     $sql = "SELECT count(*) FROM type_products WHERE id_type=?";
//     return pdo_query_value($sql, $id_type) > 0;
// }
