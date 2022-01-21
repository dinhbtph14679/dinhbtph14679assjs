<?php
require_once '../dao/product.php';
require_once '../dao/type_product.php';
$id = $_GET['id'];
$list_product = select_pro_by_type($id);
$list_type = type_products_select_all();
$list_top10 = product_select_top10();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poly Mac</title>
    <link rel="stylesheet" href="./../css/user/san_pham1.css">
</head>

<body>
    <div class="container">
        <header>
            <?php require './../Layout/header_index.php' ?>
        </header>
        <!----------END HEADER------------->
        <main>
            <div class="main_content">
                <div class="content">
                    <div class="sp">
                        <section class="tieude_sp">
                            <h2>SẢN PHẨM!</h2>
                        </section>
                        <div class="all_sp">
                            <?php foreach ($list_product as $key => $value) : ?>
                                <section class="content_box_new">
                                    <td>
                                    <img src="./../Image/<?=$value['image']?>" alt="" style="width: 120px; height: 120px">
                                    </td>
                                    <section class="text_box">
                                        <h3> <?= $value['name'] ?></h3>
                                        <div class="nd_textsp">
                                            <del><?= $value['price'] ?> ₫ </del>
                                            <h4> <?= $value['discount'] ?> ₫</h4>
                                            <div class="cnSP">
                                                <button><a href="add_cart.php?id=<?= $value['id'] ?>" title="Thêm giỏ hàng">THÊM GIỎ HÀNG</a></button>
                                                <button><a href="view.php?id=<?= $value['id'] ?>" title="Xem chi tiết">XEM CHI TIẾT</a></button>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                            <?php endforeach; ?>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <!------------------------------------------->
                <div class="left_content">
                    <div class="top_sp">
                        <section class="tieude_dm">
                            <h2>DANH MỤC</h2>
                        </section>
                        <?php foreach ($list_type as $key => $value) : ?>
                            <section class="box_dm">
                                <section class="content_box_dm">
                                    <a href="get_product_by_type.php?id=<?= $value['id_type'] ?>" id="name_dm">
                                        <section class="text_dm">
                                            <h3>
                                                <a id="text_name" href="get_product_by_type.php?id=<?= $value['id_type'] ?>" title="">
                                                    <?= $value['name_type'] ?>
                                                </a>
                                            </h3>
                                        </section>
                                    </a>
                                </section>
                                <br>
                            </section>
                        <?php endforeach; ?>
                    </div>
                    <div class="top_sp">
                        <section class="tieude_top">
                            <h2>TOP SẢN PHẨM!</h2>
                        </section>
                        <?php foreach ($list_top10 as $key => $value) : ?>
                            <section class="box_top">

                                <a href="view.php?id=<?= $value['id'] ?>" id="sp_top">
                                    <section class="content_box_top">
                                        <td>
                                            <img src="./../Image/<?= $value['image'] ?>" alt="" style="width: 40px; height: 40px">
                                        </td>
                                        <section class="text_top">
                                            <br>
                                            <h3> <?= $value['name'] ?> </h3>
                                            <br>
                                        </section>
                                    </section>
                                    <br>
                                </a>

                            </section>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tin_tuc">
                <div class="tin">
                <img src="./../Image/news.jpeg" alt="" width="350px">
                    <div class="content_tin">
                        <p>11/11/2021</p>
                        <h3>Các máy Mac trong tương lai có thể được trang bị chip 3nm lên tới 40 lõi</h3>
                        <button class="xem_tin"> <a href="">Xem thêm...</a> </button>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="tin">
                <img src="./../Image/news.jpeg" alt="" width="350px">
                    <div class="content_tin">
                        <p>11/11/2021</p>
                        <h3>Các máy Mac trong tương lai có thể được trang bị chip 3nm lên tới 40 lõi</h3>
                        <button class="xem_tin"> <a href="">Xem thêm...</a> </button>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="tin">
                <img src="./../Image/news.jpeg" alt="" width="350px">
                    <div class="content_tin">
                        <p>11/11/2021</p>
                        <h3>Các máy Mac trong tương lai có thể được trang bị chip 3nm lên tới 40 lõi</h3>
                        <button class="xem_tin"> <a href="">Xem thêm...</a> </button>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </main>
        <!----------END MAIN------------->
        <footer>
            <?php require './../Layout/footer_index.html' ?>
        </footer>
        <!----------END FOOTER------------->
    </div>
</body>
<script src="./../js/banner.js"></script>

</html>