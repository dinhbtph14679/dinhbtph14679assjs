<?php
require_once '../common/common.php';
require_once '../dao/order.php';
require_once '../dao/order_details.php';
session_start();

$date_on = date("Y-m-d");
$address_order = $_POST['address_order'];
$phone_number_order = $_POST['number_order'];
$totail = $_POST['totail'];
$id_user = $_SESSION['users']['id'];
$status = 1;
$erros = "";
if (empty($address_order)) {
    $erros .= "bạn cần điền địa chỉ giao hàng";
}
if (strlen($erros) > 0) {
    $erros .= "<br>vui lòng nhập lại";
    header("location: cart.php?erros=" . $erros);
    die;
}
insert_order($id_user, $date_on, $phone_number_order, $address_order, $totail, $status);
$orders = order_select_by_idus();
// dd($orders);
$id_orders = $orders['LastID'];
foreach ($_SESSION['cart'] as $key => $value) :
    $price = $value['discount'] ? $value['discount'] : $value['price'];
    $totails = $value['total'];
    $quantity = $value['quantity'];
    $id_product = $value['id'];
    // dd($value);
    insert_order_detal($id_orders, $totails, $quantity, $price, $id_user, $id_product);
endforeach;
unset($_SESSION['cart']);
header("location:index.php");
