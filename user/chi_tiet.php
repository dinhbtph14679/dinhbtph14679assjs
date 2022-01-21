<?php
require_once '../dao/comment.php';
require_once '../dao/product.php';
$id = $_GET['id'];
$list_comment = comment_select_by_product($id);
$product = product_select_by_id($id);
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user/chi_tiet1.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
</head>

<body>
    <main id="chi_tiet">
        <div class="tt_chi_tiet">
            <div class="img_ct">
            <img src="./../Image/<?=$product['image']?>" alt="" style="width: 350px;">

            </div>
            <div class="text_ct">
                <h2><?= $product['name'] ?></h2>
                <dl class="dl_horizontal">
                    <dd>:/<?= $product['size'] ?>inch/</dd>
                    <?php if ($product['discount'] == 0) : ?>
                        <dt><?= $product['price'] ?> VND</dt>
                    <?php else : ?>
                        <dt style="color: #7ac142;"><del><?= $product['price'] ?></del> VND</dt>
                        <dt><?= $product['discount'] ?> VND</dt>
                    <?php endif; ?>
                </dl> <br>
                <div class="cam_ket">
                    <p>
                        <ion-icon name="logo-apple"></ion-icon> Sản phẩm chính hãng Apple.<br>
                        <ion-icon name="logo-apple"></ion-icon> Máy có hình thức tuyển chọn rất đẹp không móp méo. <br>
                        <ion-icon name="logo-apple"></ion-icon> Bảo hành toàn bộ máy 12 tháng tại Mac One. <br>
                        <ion-icon name="logo-apple"></ion-icon> Giảm giá 10% khi mua phụ kiện kèm theo. <br>
                    </p>
                    <div class="chon_mau">
                        <p>Hãy nhập mã màu: Xám, Bạc</p>
                        <input type="text" placeholder=" Vd: Xám">
                    </div>
                </div>

                <button id="mua_ngay"><a href="" title="Mua ngay">MUA NGAY</a></button>
                <br>
                <?php if (isset($_GET['erros'])) : ?>
                    <p style="color: red;"><?= $_GET['erros'] ?></p>
                   
                <?php endif ?>
                <button id="bt_con2"><a href="add_cart.php?id=<?= $product['id'] ?>" title="Thêm giỏ hàng">THÊM GIỎ HÀNG</a></button>
                <button id="bt_con2"><a href="add_cart.php?id=<?= $product['id'] ?>" title="Thêm giỏ hàng">MUA TRẢ GÓP</a></button>
            </div>
        </div>

        <div class="mo_ta">

            <h3>Mô tả sản phẩm:</h3>
            <br>
            <hr>
            <div class="content_mo_ta">
                <h2><?= $product['name'] ?></h2>
                <div class="text_mota1">
                    <p><?= $product['description'] ?></p>
                </div>
                <div class="anh_mota">
                    <img src="./../Image/<?= $product['image'] ?>" alt="" width="500px">
                </div>
                <div class="text_mota2">
                    <h3 style="margin:10px;">Bình luận:</h3>
                    <hr>
                    <?php if ($list_comment) : ?>
                        <ul class="bl">
                            <?php foreach ($list_comment as $key) : ?>
                                <div style="margin-top: 5px;">
                                    <li style="list-style: none; margin-left: 10px; color:aqua">
                                        <h4>Người bình luận: <?= $key['name_user'] ?></h4>
                                    </li>
                                    <li style="list-style: none; margin-left: 10px;"><?= $key['Content'] ?> </li>
                                </div>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['users'])) : ?>
                        <form id="binhluan" action="add_comment.php" method="post">
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            <textarea name="content" id="" rows="4" style="width:100% ;margin:10px 0px; border-radius:10px"></textarea>
                            <button type="submit" id="bt_con2" style="color:white" name="btn_binhluan">Gửi</button>
                        </form>
                    <?php else : ?>
                        <div style="margin:5px;">Bạn cần đăng nhập để bình luận</div>
                    <?php endif ?>

                </div>
                <br>
                <br>
                <hr>
            </div>
        </div>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>