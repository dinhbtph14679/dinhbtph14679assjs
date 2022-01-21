<?php
require_once 'pdo.php';

//function comment_insert
function comment_insert($id_user, $id,$date_on, $content){
    $sql = "INSERT INTO comments(id_user, id_product,date_on, content) VALUES(?,?,?,?)";
    pdo_execute($sql, $id_user,$id,$date_on,$content);
}
//function binh_luan_update
function comment_update($id_comments, $id_user, $id, $date_on, $content){
    $sql = "UPDATE comments SET content=?,date_on=? WHERE id_user=? AND id=? AND id_comments=?";
    pdo_execute($sql, $content, $date_on, $id_user, $id,$id_comments);
}
//function binh_luan_delete
function comments_delete($id_comments){
    $sql = "DELETE FROM comments WHERE id_comments=?";
    pdo_execute($sql, $id_comments);
}
//function binh_luan_select_all
function comments_select_all(){
    $sql = "SELECT cmt.* , us.* , pr.* FROM users us join comments cmt on us.id_user = cmt.id_user join product pr 
    on cmt.id_product = pr.id";
    return pdo_query($sql);
}
function comment_select_by_product($id) {
    $sql = "SELECT * FROM comments cmt INNER JOIN users us ON cmt.id_user=us.id_user WHERE id_product=?";
    return pdo_query($sql, $id);
}
//function binh_luan_select_by_id
function comments_select_by_id($id_comments){
    $sql = "SELECT * FROM comments WHERE id_comments=?";
    return pdo_query_one($sql,$id_comments);
}

//function binh_luan_select_by_hang_hoa

function comments_select_by_product($id) {
    $sql = "SELECT * FROM comment cm INNER JOIN user us ON cm.id_user=us.user WHERE id=?";
    return pdo_query($sql, $id);
}