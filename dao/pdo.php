<?php
//khởi tạo kiết nối
function pdo_get_connection() {
    $conn = new PDO("mysql:host=localhost; dbname=duan1; charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
//thực thi các câu lệnh (insert,update,delete)
function pdo_execute($sql) {
   
    $args = array_slice(func_get_args(), 1);
    // var_dump($args);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);//$sql = INSERT INTO loai(ten_loai) values(?)
        $stmt->execute($args);
    } catch (PDOException $e) {
        echo "Có lỗi xảy ra: " . $e->getMessage();
    } finally {
        unset($conn);
    }
}
//hàm thực thi câu lệnh select
function pdo_query($sql) {
    $args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch(PDOException $e) {
        echo "Có lỗi xảy ra: " . $e->getMessage();
    } finally {
        unset($conn);
    }
}
//hàm lấy ra 1 bản ghi
function pdo_query_one($sql) {
    $args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch(PDOException $e) {
        echo "Có lỗi xảy ra: " . $e->getMessage();
    } finally {
        unset($conn);
    }
}
