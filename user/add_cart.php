<?php
require_once '../dao/product.php';
require_once '../common/common.php';
session_start();
// unset($_SESSION['cart']);die;
$erros = "";
$id = $_GET['id'];
$ROW = product_select_by_id($id);
if (isset($_GET['delete'])) {

    unset($_SESSION['cart'][$id]);
    header("location:" . $_SERVER['HTTP_REFERER']);
    die;
}
if (isset($_SESSION['cart'][$id]) && array_key_exists($id, $_SESSION['cart'])) {
    if ($_SESSION['cart'][$id]['quantity'] < $ROW['quantyti'] || $_SESSION['cart'][$id]['quantity'] = $ROW['quantyti']) {
        $col = $_GET['col'];
        if ($col == 'false') {
            $_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] - 1;
            if ($_SESSION['cart'][$id]['discount'] != 0) {
                $_SESSION['cart'][$id]['total'] = $_SESSION['cart'][$id]['discount'] * $_SESSION['cart'][$id]['quantity'];
            } else {
                $_SESSION['cart'][$id]['total'] = $_SESSION['cart'][$id]['price'] * $_SESSION['cart'][$id]['quantity'];
            }
            header("Location:" . $_SERVER['HTTP_REFERER']);
            die;
        } else {
            $_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
            if ($_SESSION['cart'][$id]['discount'] != 0) {
                $_SESSION['cart'][$id]['total'] = $_SESSION['cart'][$id]['discount'] * $_SESSION['cart'][$id]['quantity'];
            } else {
                $_SESSION['cart'][$id]['total'] = $_SESSION['cart'][$id]['price'] * $_SESSION['cart'][$id]['quantity'];
            }
            header("Location:" . $_SERVER['HTTP_REFERER']);
            die;
        }
    } else {
        $erros .= "sản phẩm đã hết";
        header("location:chi_tiet_sp.php?id=" . $_SESSION['cart'][$id]['id'] . "&&erros=" . $erros);
        die;
    }
} else {
    $_SESSION['cart'][$id] = [
        'id' => $id,
        'quantity' => 1,
        'name' => $ROW['name'],
        'price' => $ROW['price'],
        'image' => $ROW['image'],
        'size' => $ROW['size'],
        'color' => $ROW['colors'],
        'discount' => $ROW['discount'],
        'total' => $ROW['discount'] ? $ROW['discount'] : $ROW['price'],
    ];
}
// dd($_SESSION['cart']);
header("Location:" . $_SERVER['HTTP_REFERER']);
