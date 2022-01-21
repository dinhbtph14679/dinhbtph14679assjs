<?php
require_once '../dao/order_details.php';
    $id_order = $_GET['btn_ct'];
    //  dd($_GET);
    $list_order_details=order_detail_select_id($id_order);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="./../css/admin/bootstrap/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./../css/admin/bootstrap/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="./../css/admin/bootstrap/style1.css">

    <title>QUẢN LÝ SẢN PHẨM</title>
</head>

<body>


    <div class="content">

        <div class="container">
            <h2 class="mb-5">CHI TIẾT ĐƠN HÀNG</h2>


            <div class="table-responsive">
                <button class="them">
                    <a href="index.php?list_order">QUAY LẠI</a>
                </button>

                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TÊN</th>
                            <th scope="col">GIÁ</th>
                            <th scope="col">SỐ LƯỢNG</th>
                            <th scope="col">ẢNH</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_order_details as $key => $value) : ?>
                            <tr scope="row">
                                <td><?= $value['id_details'] ?></td>
                                <td><?= $value['name'] ?></td>
                                <td><?= $value['discount']?$value['discount']:$value['price'] ?></td>
                                <td><?= $value['quantity'] ?></td>
                                <td>
                                    <img src="../Image/<?= $value['image'] ?>" style="width: 100px;border-radius: 5px;">
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


        </div>

    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>