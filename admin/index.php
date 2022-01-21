<?php
require_once '../dao/order.php';
require_once '../globle.php';
require_once '../common/common.php';
require_once '../dao/product.php';
require_once '../dao/comment.php';
require_once '../dao/user.php';
require_once '../dao/type_product.php';
require_once '../dao/order_details.php';
extract($_REQUEST);
$erros = "";
session_start();
if (!isset($_SESSION['users']) || $_SESSION['users']['role'] != 1) {
    header('location:/duan1/user/index.php');
    die;
}
if (array_key_exists('list_user', $_REQUEST)) //user
{
    $list_user = user_select_all();
    $VIEW_PAGE = 'list_user.php';
} elseif (array_key_exists('btn_add', $_REQUEST)) //add
{
    $id = $_GET['btn_add'];
    $role = 1;
    add_role($id, $role);
    $list_user = user_select_all();
    $VIEW_PAGE = 'list_user.php';
} elseif (array_key_exists('btn_add_role', $_REQUEST)) //add
{
    $id = $_GET['btn_add_role'];
    $role = 0;
    add_role($id, $role);
    $list_user = user_select_all();
    $VIEW_PAGE = 'list_user.php';
}
elseif (array_key_exists('btn_edit', $_REQUEST)){

        $id = $_GET['btn_edit'];
        $user = user_select_by_id($id);
        $VIEW_PAGE = 'edit_user.php';
}
elseif (array_key_exists('edit', $_REQUEST)) //edit
{

    // dd($_FILES);
    if ($_FILES['avatar']['size'] > 0) {
        if ($_FILES['avatar']['type'] == "image/jpeg") {
            $avatar = upload_file('avatar', $PATH_IMG . '/');
            $avatar = strlen($avatar) > 0 ? $avatar : 'product.jpg';
        } else {
            $erros .= "<br> file bạn chọn ảnh không phải là ảnh";
        }
    }
    if (empty($email)) {
        $erros .= "<br>Hãy nhập email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros .= "<br>Không đúng định dạng email";
    }
    if (empty($name) || empty($gender) || empty($gender) || empty($address) || !is_numeric($role)) {
        $erros .= " bạn không nhập đúng hoặc đã bỏ trống dữ liệu ";
    }
    if (strlen($erros) > 0) {
        header("location: edit_user.php?btn_edit=" . $id . "&&erros=" . $erros);
        die;
    }
    $user = user_select_by_id($id);
    $avatar = $user['avatar'];
    user_update($id, $name, $name, $password, $email, $gender, $avatar, $address, $role);
    $list_user = user_select_all();
    $VIEW_PAGE = 'list_user.php';
} elseif (array_key_exists('btn_delete', $_REQUEST)) //delete user
{
    $id = $_GET['btn_delete'];
    user_delete($id);
    $list_user = user_select_all();
    $VIEW_PAGE = 'list_user.php';
} elseif (array_key_exists('list_type', $_REQUEST)) //type_product
{
    $list_type = type_products_select_all();
    $VIEW_PAGE = 'list_type.php';
} elseif (array_key_exists('btn_add_type', $_REQUEST)) //them
{
    $VIEW_PAGE = 'add_type.php';
} elseif (array_key_exists('add_type', $_REQUEST)) {

    if (empty($name_type)) {
        $erros .= "bạn chưa nhập tên loại sản phẩm";
    }
    if ($_FILES['images']['size']) {
        if ($_FILES['images']['type'] == "image/jpeg") {
            $images = upload_file('images', $PATH_IMG . '/');
            $images = strlen($images) > 0 ? $images : 'product.jpg';
        } else {
            $erros .= "<br>file bạn chọn ảnh không phải là ảnh";
        }
    } else {
        $erros .= "<br>bạn chưa chọn ảnh";
    }
    if (strlen($erros) > 0) {
        header("location: add_type.php?erros=" . $erros);
        die;
    }
    insert_type_products($name_type, $images);
    $list_type = type_products_select_all();
    $VIEW_PAGE = 'list_type.php';
} elseif (array_key_exists('btn_edit_type', $_REQUEST)) //edit
{

    $id = $_GET['btn_edit_type'];
    $type = type_products_select_by_id($id);
    $VIEW_PAGE = 'edit_type.php';
} elseif (array_key_exists('edit_type', $_REQUEST)) {
    $type = type_products_select_by_id($id_type);
    if (empty($name_type)) {
        $erros .= "bạn chưa nhập tên loại sản phẩm";
    }
    //   dd($type);
    $images = $type['images'];
    if ($_FILES['images']['size']) {
        if ($_FILES['images']['type'] == "image/jpeg") {
            $images = upload_file('images', $PATH_IMG . '/');
            $images = strlen($images) > 0 ? $images : 'product.jpg';
        } else {
            $erros .= "<br>file bạn chọn ảnh không phải là ảnh vui lòng chọn ";
        }
    }
    if (strlen($erros) > 0) {
        $erros .= "<br>vui lòng nhập lại";
        header("location: edit_type.php?btn_edit_type=" . $id_type . "&&erros=" . $erros);
        die;
    }
    update_type_products($id_type, $name_type, $images);
    $list_type = type_products_select_all();
    $VIEW_PAGE = 'list_type.php';
} elseif (array_key_exists('btn_delete_type', $_REQUEST)) //delete
{
    $id = $_GET['btn_delete_type'];
    delete_type_products($id);
    $list_type = type_products_select_all();
    $VIEW_PAGE = 'list_type.php';
} elseif (array_key_exists('list_product', $_REQUEST)) //product
{
    $list_product = product_select_all();
    $VIEW_PAGE = 'list_product.php';
} elseif (array_key_exists('btn_add_product', $_REQUEST)) //add
{
    $list_type = type_products_select_all();
    $VIEW_PAGE = 'add_product.php';
} elseif (array_key_exists('add_product', $_REQUEST)) {
    if (empty($id_type) || empty($name) || empty($price) || !is_numeric($price) || empty($quantyti) || !is_numeric($quantyti)) {
        $erros .= "bạn không nhập đúng hoặc đã bỏ trống dữ liệu ";
    }
    if ($_FILES['images']['size']) {
        if ($_FILES['images']['type'] == "image/jpeg") {
            $images = upload_file('images', $PATH_IMG . '/');
            $images = strlen($images) > 0 ? $images : 'product.jpg';
        } else {
            $erros .= "<br>file bạn chọn ảnh không phải là ảnh vui lòng chọn ảnh";
        }
    }
    if (strlen($erros) > 0) {
        $erros .= "<br>vui lòng nhập lại";
        header("location: add_product.php?erros=" . $erros);
        die;
    }
    $date_on = date("Y-m-d");
    insert_product($id_type, $name, $price, $images, $description, $quantyti, $size, $colors, $discount, $date_on);
    $list_product = product_select_all();
    $VIEW_PAGE = 'list_product.php';
} elseif (array_key_exists('btn_edit_product', $_REQUEST)) //edit
{
    $id = $_GET['btn_edit_product'];
    $product = product_select_by_id($id);
    $list_type = type_products_select_all();
    $VIEW_PAGE = 'edit_pro.php';
} elseif (array_key_exists('edit_product', $_REQUEST)) {
    $product = product_select_by_id($id);
    $images = $product['image'];
    if (empty($id_type) || empty($name) || empty($price) || !is_numeric($price) || empty($quantyti) || !is_numeric($quantyti)) {
        $erros .= "bạn không nhập đúng hoặc đã bỏ trống dữ liệu ";
    }
    if ($_FILES['images']['size']) {
        if ($_FILES['images']['type'] == "image/jpeg") {
            $images = upload_file('images', $PATH_IMG . '/');
            $images = strlen($images) > 0 ? $images : 'product.jpg';
        } else {
            $erros .= "<br>file bạn chọn ảnh không phải là ảnh";
        }
    }
    if (strlen($erros) > 0) {
        $erros .= "<br>vui lòng nhập lại";
        header("location: edit_pro.php?btn_edit_product=" . $id . "&&erros=" . $erros);
        die;
    }
    $date_on = date("Y-m-d");
    update_product($id, $id_type, $name, $price, $images, $description, $quantyti, $size, $colors, $discount, $date_on);
    $list_product = product_select_all();
    $VIEW_PAGE = 'list_product.php';
} elseif (array_key_exists('btn_delete_product', $_REQUEST)) //delete
{
    $id = $_GET['btn_delete_product'];
    delete_product($id);
    $list_product = product_select_all();
    $VIEW_PAGE = 'list_product.php';
} elseif (array_key_exists('list_comment', $_REQUEST)) //comment
{
    $list_comment = comments_select_all();
    $VIEW_PAGE = 'list_comment.php';
} elseif (array_key_exists('btn_delete_comment', $_REQUEST)) //delete
{
    $id = $_GET['btn_delete_comment'];
    comments_delete($id);
    $list_comment = comments_select_all();
    $VIEW_PAGE = 'list_comment.php';
} elseif (array_key_exists('list_order', $_REQUEST)) //orders
{
    $list_order = select_all_order();
    $VIEW_PAGE = 'list_order.php';
} //btn_edit_order
elseif (array_key_exists('btn_edit_order', $_REQUEST)){

    $id = $_GET['btn_edit_order'];
    $order = order_select_by_id($id);
    $VIEW_PAGE = 'edit_order.php';
}
elseif (array_key_exists('edit_order', $_REQUEST)) {
    if (empty($id_user) || empty($address_order) || empty($moneys) || !is_numeric($moneys) || empty($id_order)) {
        $erros .= "bạn không nhập đúng hoặc đã bỏ trống dữ liệu ";
    }
    if (strlen($erros) > 0) {
        $erros .= "<br>vui lòng nhập lại";
        header("location: edit_order.php?btn_edit=" . $id_order . "&&erros=" . $erros);
        die;
    }
    $date_on = date("Y-m-d");
    update_order($id_user, $date_on, $address_order, $moneys, $status, $id_order);
    $list_order = select_all_order();
    $VIEW_PAGE = 'list_order.php';
} elseif (array_key_exists('delete_order', $_REQUEST)) {
    $id = $_GET['delete_order'];
    order_delete($id);
    $list_order = select_all_order();
    $VIEW_PAGE = 'list_order.php';
}elseif (array_key_exists('statistical', $_REQUEST)){
    $list_statistical = statistical();
    $VIEW_PAGE = 'statistical.php';
}
else {
    $list_comment = comments_select_all();
    $list_product = product_select_all();
    $list_user = user_select_all();
    $VIEW_PAGE = 'tong_quan.php';
}
include_once '../Layout/layout_admin.php';
