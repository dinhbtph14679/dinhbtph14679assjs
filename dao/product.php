<?php
require_once 'pdo.php';
//function insert_product
function insert_product($id_type, $name, $price, $image, $description, $quantyti, $size, $colors, $discount, $date_on)
{
    $sql = "INSERT INTO product(id_type, name, price, image, description, quantyti, size, colors,discount,date_on) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $id_type, $name, $price, $image, $description, $quantyti, $size, $colors, $discount, $date_on);
}
//function hang_hoa_update
function update_product($id, $id_type, $name, $price, $image, $description, $quantyti, $size, $colors, $discount, $date_on)
{
    $sql = "UPDATE product SET id_type=?,  name=?, price=?, image=?, description=?, quantyti=?, size=?, colors=?, discount=?, date_on=? WHERE id=?";
    pdo_execute($sql, $id_type, $name, $price, $image, $description, $quantyti, $size, $colors, $discount, $date_on, $id);
}
//function hang_hoa_delete
function delete_product($id)
{
    $sql = "DELETE FROM product WHERE id=?";
    pdo_execute($sql, $id);
}
//SELECT
//function hang_hoa_select_all
function product_select_all()
{
    $sql = "SELECT * FROM product ORDER BY id DESC";
    return pdo_query($sql);
}
//hàm lấy ra chi tiết 1 sản phẩm
function product_select_by_id($id)
{
    $sql = "SELECT * FROM product WHERE id=?";
    return pdo_query_one($sql, $id);
}
//select by id_type
function product_select_by_type($id_type)
{
    $sql = "SELECT * FROM product WHERE id_type=?";
    return pdo_query($sql, $id_type);
}
//same 
function product_same_type($id_type, $id)
{
    $sql = "SELECT * FROM product WHERE id_type=? AND id!=? LIMIT 0,3";
    return pdo_query($sql, $id_type, $id);
}
//lấy ra các sản phẩm cx loại
function select_pro_by_type($id_type)
{
    $sql = "SELECT * FROM product WHERE id_type =?";
    return pdo_query($sql, $id_type);
}
//select top10 product
function product_select_top10()
{
    $sql = "SELECT * FROM product WHERE view > 0 order by  view desc  limit 0,10;";
    return pdo_query($sql);
}
//tăng lượt xem
function view_add($id)
{
    $sql = "UPDATE  product  SET view = view+1 WHERE id = ?";
    pdo_execute($sql, $id);
}

//tìm kiếm sản phẩm
function search_product($search)
{
    $sql = ("SELECT * FROM product pr  
    JOIN type_products tp ON tp.id_type=pr.id_type  
    WHERE name LIKE ? OR name_type LIKE ?");
    return pdo_query($sql,$search,$search);
}
// thong ke san ph
function statistical(){
    $sql = "SELECT type_products.id_type, type_products.name_type, 
        COUNT(*) as 'soluong',
        MAX(product.price) as 'giacao',
        MIN(product.price) as 'giathap',
        AVG(product.price) as 'giatb',
        SUM(orders_details.totails) as 'doanhthu'
        FROM  orders JOIN orders_details ON orders.id_order = orders_details.id_order
        JOIN product ON orders_details.id_product = product.id JOIN
        type_products ON type_products.id_type = product.id_type WHERE orders.status = 1
        GROUP BY  type_products.id_type, type_products.name_type;";
    return pdo_query($sql);
}
