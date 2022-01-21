<?php
require_once '../dao/product.php';
$id = $_GET['id'];
view_add($id);
header("location:chi_tiet_sp.php?id=$id");
