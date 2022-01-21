

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
      <h2 class="mb-5">QUẢN LÝ SẢN PHẨM</h2>
      

      <div class="table-responsive">
        <button class="them">
            <a href="index.php?btn_add_product">THÊM</a>
        </button>
        
        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">ID LOẠI</th>
              <th scope="col">TÊN</th>
              <th scope="col">GIÁ</th>
              <th scope="col">ẢNH</th>
              <th scope="col">SỐ LƯỢNG</th>
              <th scope="col">SIZE</th>
              <th scope="col">MÀU</th>
              <th scope="col">CHIẾT KHẤU</th>
              <th scope="col">LƯỢT XEM</th>
              <th scope="col">THỜI GIAN</th>
              <th scope="col">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($list_product as $key => $value) :?>
                <tr scope="row">
                <td><?=$value['id']?></td>
                    <td><?=$value['id_type']?></td>
                    <td><?=$value['name']?></td>
                    <td><?=$value['price']?></td>
                    <td>
                        <img src="../Image/<?=$value['image']?>"  style ="width: 100px;border-radius: 5px;">
                    </td>
                    <td><?=$value['quantyti']?></td>
                    <td><?=$value['size']?></td>
                    <td><?=$value['colors']?></td>
                    <td><?=$value['discount']?></td>
                    <td><?=$value['view']?></td>
                    <td><?=$value['date_on']?></td>
                    
                    <td>
                        <button class="sua">
                            <a href="index.php?btn_edit_product=<?=$value['id']?>">SỬA</a>
                        </button>
                        <button class="xoa">
                            <a href="index.php?btn_delete_product=<?=$value['id']?>">XOÁ</a>
                        </button>
                    </td>
                        
                    
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