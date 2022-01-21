

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

    <title>THỐNG KÊ</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">THỐNG KÊ</h2>
      

      <div class="table-responsive">
        
        <table class="table table-striped custom-table">
          <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Loại sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Gía cao</th>
                <th scope="col">Gía thấp</th>
                <th scope="col">Gía trung bình</th>
                <th scope="col">Doanh thu</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($list_statistical as $key => $value) :?>
            <?php  ?>
            <tr scope="row">
                    <td><?=$value['id_type']?></td>
                    <td><?=$value['name_type']?></td>
                    <td><?=$value['soluong']?></td>
                    <td><?php $number = $value['giacao'];
                    echo number_format($number);
                    ?></td>
                     <td><?php $number = $value['giathap'];
                    echo number_format($number);
                    ?></td>
                    <td><?php $number = $value['giatb'];
                    $number_format1 = $number + 0;
                    echo number_format($number_format1);
                    ?></td>
                    <td><?php $number = $value['doanhthu'];
                    echo number_format($number);
                    ?></td>
                </tr>
            <?php endforeach ; ?>
            
            
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