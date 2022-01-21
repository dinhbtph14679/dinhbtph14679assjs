<?php
require_once '../dao/product.php';
require_once '../dao/type_product.php';
$list_product = product_select_all();
$list_type = type_products_select_all();
$list_top10 = product_select_top10();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Tức</title>
    <link rel="stylesheet" href="./../css/user/tin_tuc1.css">
    
    
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
                        <section class="tieude">
                                <h2>TIN TỨC</h2>
                        </section>
                        <div class="all_sp">
                            <section class="content_box_new">

                                <div class="tin">
                                    <img src="./../Image/news.jpeg" alt="" width="250px">
                                    <div class="content_tin">
                                        <h3>Các máy Mac trong tương lai có thể được trang bị chip 3nm lên tới 40 lõi</h3>
                                        <p>11/11/2021</p>

                                        <button class="xem_tin"> <a href="./xem_tin.php">Xem thêm...</a> </button>
                                    </div>
                                </div>

                            </section>
                            <section class="content_box_new">

                                <div class="tin">
                                <img src="./../Image/news.jpeg" alt="" width="250px">
                                    <div class="content_tin">
                                        <h3>Các máy Mac trong tương lai có thể được trang bị chip 3nm lên tới 40 lõi</h3>
                                        <p>11/11/2021</p>

                                        <button class="xem_tin"> <a href="">Xem thêm...</a> </button>
                                    </div>
                                </div>
                                
                            </section>
                            <section class="content_box_new">

                                <div class="tin">
                                <img src="./../Image/news.jpeg" alt="" width="250px">
                                    <div class="content_tin">
                                        <h3>Các máy Mac trong tương lai có thể được trang bị chip 3nm lên tới 40 lõi</h3>
                                        <p>11/11/2021</p>

                                        <button class="xem_tin"> <a href="">Xem thêm...</a> </button>
                                    </div>
                                </div>
                                
                            </section>
                            <section class="content_box_new">

                                <div class="tin">
                                <img src="./../Image/news.jpeg" alt="" width="250px">
                                    <div class="content_tin">
                                        <h3>Các máy Mac trong tương lai có thể được trang bị chip 3nm lên tới 40 lõi</h3>
                                        <p>11/11/2021</p>

                                        <button class="xem_tin"> <a href="">Xem thêm...</a> </button>
                                    </div>
                                </div>
                                
                            </section>
                            

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
                                        <a href="get_product_by_type?id=<?= $value['id_type'] ?>" id="name_dm">
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