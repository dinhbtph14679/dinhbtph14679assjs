<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../Layout_css/header_index.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container_header">
        <div class="header_min">
            <div class="text_header_min">
                <h3>Poly Mac: Uy tín trong từng sản phẩm!</h3>

                <h3>Hotline: </h3>
                <a href="" title="Gọi ngay"><b>0923.239.468</b></a>
            </div>
            <div class="login">
                <?php if (isset($_SESSION['users'])) : ?>
                    <div class="acc">
                        <h3><?= $_SESSION['users']['name'] ?></h3>
                        <img src="../Image/<?= $_SESSION['users']['avatar'] ?>" alt="">
                    </div>
                    <div class="logout">
                        <?php if ($_SESSION['users']['role'] == 1) : ?>
                            <button type="button" class="bt_to_ad"><a href="../admin/index.php">Đến trang quản trị</a></button>
                        <?php endif; ?>
                        <button class="nut_thoat" type="button"><a href="../login/logout.php">Thoát</a></button>
                    </div>
                <?php else : ?>
                    <div class="dn_dk">
                        <button class="nut_dn" type="button"><a href="../login/login_sigup.php">Đăng nhập</a></button>
                        <button class="nut_dk" type="button"><a href="../login/login_sigup.php">Đăng Kí</a></button>
                    </div>
                    
                <?php endif; ?>
            </div>
        </div>
        <div class="header_max">
            <a href="./../user/index.php">
                <img src="./../Image/logo_white01.png" alt="" width=80px>
            </a>
            <menu>
                <ul>
                    <li class="dropdown">
                        <a href="./../user/index.php" class="dropbtn">Trang Chủ</a>
                        <div class="dropdown-content">
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="./../user/san_pham.php" class="dropbtn">Sản Phẩm</a>
                        <div class="dropdown-content">
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="./../user/tin_tuc.php" class="dropbtn">Tin Tức</a>
                        <div class="dropdown-content">
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="./../user/gioi_thieu.php" class="dropbtn">Giới Thiệu</a>
                        <div class="dropdown-content">
                        </div>
                    </li>
                </ul>
            </menu>
            <div class="search_cart">
                <div class="search-container">
                    <form action="../user/get_pt_by_search.php" method="POST">
                        <input type="text" name="search" placeholder="Tìm kiếm..." class="search-input">
                        <button class="search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="cart">
                    <a href="cart.php">
                        <ion-icon id="cart" name="cart-outline"></ion-icon>
                    </a>

                </div>
            </div>

        </div>
    </div>
</body>

</html>