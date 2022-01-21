<?php
require_once 'pdo.php';
//delete
function insert_order($id_user,$date_on,$phone_number_order,$address_order,$totail,$status){
    $sql ="INSERT INTO orders(id_user,date_on,phone_number_order,address_order,totail,status) VALUES ('$id_user','$date_on','$phone_number_order','$address_order','$totail','$status')";
    pdo_execute($sql);
}
function update_order( $id_user,$date_on,$address_order,$totail,$status,$id_order){
    $sql ="UPDATE  orders SET id_user='$id_user',date_on='$date_on',address_order='$address_order',totail='$totail',status='$status' WHERE id_order=$id_order";
    pdo_execute($sql);
}
function order_delete($id_order){
    $sql = "DELETE FROM orders WHERE id_order=?";
    pdo_execute($sql, $id_order);
}
//lấy ra 1 bản ghi
function order_select_by_id($id_order){
    $sql = "SELECT * FROM orders od INNER JOIN users us ON od.id_user=us.id_user WHERE id_order=?";
    return pdo_query_one($sql,$id_order);
}
function order_select_by_idus(){
    $sql = "SELECT Max(id_order) as LastID FROM orders";
    return pdo_query_one($sql);
}
function select_all_order() {
    $sql = "SELECT * FROM orders od INNER JOIN users us ON od.id_user=us.id_user ";
    return pdo_query($sql);
}
?>
