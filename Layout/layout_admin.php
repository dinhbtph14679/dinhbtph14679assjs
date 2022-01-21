<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../Layout_css/layout_admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<body>
    <div id="menu_layout" class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark" style="width: 250px;">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"> </svg>
            <img src="./../Image/logo_white02.png" alt="" width="100px" height="100px">
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php"class="nav-link" aria-current="page">
                    <ion-icon name="grid-outline"></ion-icon>
                    <span class="ms-2">Tổng quan</span>
                </a>
            </li>
            <li> 
                <a href="index.php?list_type" class="nav-link">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                    <span class="ms-2">Danh mục</span> 
                </a>
            </li>
            <li class="">
                <a href="index.php?list_user" class="nav-link">
                    <ion-icon name="people-outline"></ion-icon>
                    <span class="ms-2">Khách hàng</span>
                </a>
            </li>
            <li>
                <a href="index.php?list_order" class="nav-link">
                    <ion-icon name="document-text-outline"></ion-icon>
                    <span class="ms-2">Đơn hàng</span>
                </a>
            </li>
            <li>
                <a href="index.php?list_comment" class="nav-link">
                    <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                    <span class="ms-2">Bình luận</span>
                </a>
            </li>
            <li > 
                <a href="index.php?list_product" class="nav-link">
                    <ion-icon name="newspaper-outline"></ion-icon>
                    <span class="ms-2">Sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="index.php?statistical" class="nav-link">
                    <ion-icon name="podium-outline"></ion-icon>
                    <span class="ms-2">Thống kê</span>
                </a> 
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <!-- <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong> John W </strong>
            </a> -->
            <a href="../user/" class="ve_home">
                <ion-icon class="icon_home" name="home-outline"></ion-icon>
            </a>
        </div>
    </div>
    <div>
        <?php include_once $VIEW_PAGE ?>
    </div>
</body>
</html>