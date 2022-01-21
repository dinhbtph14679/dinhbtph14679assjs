<?php
require_once 'pdo.php';
//INSERT,UPDATE,DELETE
//insert
function user_insert($name, $name_account, $password, $email, $gender, $avatar, $address, $role){
    $sql = "INSERT INTO users(name, name_account, password, email, gender, avatar, address, role) VALUES(?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $name, $name_account, $password, $email, $gender, $avatar, $address, $role);
}
//update
function user_update($id_user, $name, $name_account, $password, $email, $gender, $avatar, $address, $role){
    $sql = "UPDATE users SET name_user=?, name_account=?, password=?, email=?, gender=?, avatar=?, address=?, role=? WHERE id_user=?";
    pdo_execute($sql,$name, $name_account, $password, $email, $gender, $avatar, $address, $role, $id_user);
}
//delete
function user_delete($id_user){
    $sql = "DELETE FROM users WHERE id_user=?";
    pdo_execute($sql,$id_user);
}
function add_role($id_user,$role){
    $sql = "UPDATE users SET role=? WHERE id_user=?";
    pdo_execute($sql,$role, $id_user);
}
//SELECT

//selcet_all
function user_select_all(){
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}
//select by id
function user_select_by_id($id_user){
    $sql = "SELECT * FROM users WHERE id_user=?";
    return pdo_query_one($sql,$id_user);
}