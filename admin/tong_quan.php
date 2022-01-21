
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/admin/tong_quan.css">
    <link rel="stylesheet" href="./tong_quan/css/bl_tong_quan.scss">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./../css/admin/bootstrap/bootstrap.min.css">
    <!-- <link href="./tong_quan/css/styles1.css" rel="stylesheet" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            font-size: 40px;
            color: #7ac142; 
        }
        #layoutSidenav_content{
            width: 100%;
            margin: 0 auto;
        }
        .container-fluid{

            width: 1100px;
        }
        .card-header{
            display: grid;
            grid-template-columns: 1fr 35fr;
        }
        .card-header ion-icon{
            color: #000;
            font-size: 18px;
            margin-top: 5px;

        }
    </style>
</head>

<body>
        

    <div class="container_admin">
        <div class="menu">
            <?php require_once './../Layout/layout_admin.php' ?>
        </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">TỔNG QUAN</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Bảng tổng quan</li>
                        </ol> -->
                        <br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Danh mục</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a href="index.php?list_type" class="small text-white stretched-link" href="#">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Khách hàng</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a href="index.php?list_user"  class="small text-white stretched-link" href="#">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Đơn hàng</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a href="index.php?list_order" class="small text-white stretched-link" href="#">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Sản phẩm</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a href="index.php?list_product" class="small text-white stretched-link" href="#">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>

                                THỐNG KÊ
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <!-- <div class="card-footer small text-muted">Cập nhật ngày hôm qua lúc 11:59 chiều</div> -->
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <ion-icon name="chatbox-ellipses"></ion-icon>
                               BÌNH LUẬN
                                
                            </div>
                            <div class="card-body">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">TÊN NGƯỜI DÙNG</th>
                                        <th scope="col">TÊN SẢN PHẨM</th>
                                        <th scope="col">THỜI GIAN</th>
                                        <th scope="col">BÌNH LUẬN</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($list_comment as $key => $value) :?>
                                            <tr scope="row">
                                                
                                                <td><?=$value['id_comments']?></td>
                                                <td><?=$value['name_user']?></td>
                                                <td>
                                                    <?=$value['name']?>
                                                </td>
                                                <td><?=$value['date_on']?></td>
                                                <td><?=$value['Content']?></td>
                                                
                                                
                                                    
                                                
                                            </tr>
                                        <?php endforeach ; ?>
                                        
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </main>
               
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./tong_quan/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="./tong_quan/assets/demo/chart-area-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="./tong_quan/js/datatables-simple-demo.js"></script>
</body>

</html>