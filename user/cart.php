<?php
require_once '../common/common.php';
require_once '../dao/product.php';
session_start();
$tong = 0;
$so_luong = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="./../css/user/cart1.css">

</head>

<body>
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>GIỎ HÀNG</b></h4>
                        </div>
                    </div>
                </div>
                <?php if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) : ?>

                    <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="../Image/<?= $value['image'] ?>"></div>
                                <div class="col">
                                    <!-- <div class="row text-muted">Shirt</div> -->
                                    <div class="row"><?= $value['name'] ?></div>
                                </div>
                                <div class="col">
                                    <?php if ($value['quantity'] > 1) : ?>
                                        <a href="add_cart.php?id=<?= $value['id'] ?>&&col=false">-</a>
                                    <?php endif; ?>
                                    <a href="#" class="border"><?= $value['quantity'] ?></a>
                                    <a href="add_cart.php?id=<?= $value['id'] ?>&&col=fales">+</a>
                                </div>
                                <div class="col"><?= $value['total'] ?> .VNĐ<span class="close"><a href="add_cart.php?id=<?= $value['id'] ?>&&delete">&#10005;</a></span></div>
                            </div>
                        </div>
                        <?php
                        //  dd($_SESSION['cart']);
                        $tong += $value['total'];
                        $so_luong += $value['quantity'];
                        ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <h3>
                        Bạn chưa có đơn hàng nào
                    </h3>
                <?php endif; ?>
                <div class="back-to-shop"><a href="index.php">&leftarrow;</a><span class="text-muted">Tiếp tục mua hàng</span></div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Thanh toán</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">Tổng sản phẩm: <?=$so_luong?></div>
                </div>
                <form action="add_oder_detal.php" method="post">
                    <?php if (isset($_GET['erros'])) : ?>
                        <p style="color: red;"><?= $_GET['erros'] ?></p>
                    <?php endif ?>
                    <p>SỐ ĐIỆN THOẠI NHẬN HÀNG</p>
                    <input type="number" id="code" name="number_order" placeholder="Số điện thoại nhận hàng">
                    <p>ĐỊA CHỈ NHẬN HÀNG</p>
                    <input type="text" name="address_order" id="code" placeholder="Địa chỉ nhận hàng">
                    <input type="hidden" name="totail" value="<?= $tong ?>">
                    <?php if (isset($_SESSION['users'])) : ?>
                        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <div class="col">THÀNH TIỀN</div>
                            <div class="col text-right"><?= $tong ?> .VNĐ</div>
                        </div>
                        <button type="submit" class="btn">MUA HÀNG</button>
                    <?php else : ?>
                        <h6>Bạn cần đăng nhập để thanh toán!</h6>
                        <div class="dn_dk">
                            <button class="nut_dn" type="button" style="border-radius:10px"><a href="../login/login_sigup.php">Đăng nhập / Đăng kí</a></button>
                        </div>
                    <?php endif; ?>
                </form>
            </div>



        </div>


    </div>
</body>

</html>