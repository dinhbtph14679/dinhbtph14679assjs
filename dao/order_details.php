<?php

require_once 'pdo.php';
//delete
function insert_order_detal($id_order,$totails,$quantity,$price,$id_user,$id_product){
    $sql = "INSERT INTO orders_details(id_order,totails,quantity,price,id_user,id_product) VALUES('$id_order','$totails','$quantity','$price','$id_user','$id_product')";
    pdo_execute($sql);
}
function order_detail_delete($id_details){
    $sql = "DELETE FROM orders_details WHERE id_details=?";
    pdo_execute($sql, $id_details);
}
function order_detail_delete_by_order($id_order){
    $sql = "DELETE FROM orders_details WHERE id_order=?";
    pdo_execute($sql, $id_order);
}
//lấy ra tất cả các chi tiết sản phẩm
function order_detail_select_all(){
    $sql = "SELECT * FROM   orders_detsils";
    return pdo_query($sql);
}
function order_detail_select_id($id_order){
    $sql = "SELECT od.*,pro.* FROM   orders_details od JOIN product pro ON pro.id=od.id_product WHERE id_order='$id_order'";
    return pdo_query($sql);
}
?>