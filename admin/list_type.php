

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

    <title>QUẢN LÝ LOẠI HÀNG</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">DANH MỤC</h2>
      

      <div class="table-responsive">
        <button class="them">
            <a href="index.php?btn_add_type">THÊM</a>
        </button>
        
        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tên</th>
              <th scope="col">Ảnh</th>
              <th scope="col">Chức năng</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($list_type as $key => $value) :?>
            <tr scope="row">
                
                    <td>
                        <?=$value['id_type']?>
                    </td>
                    <td>
                        <?=$value['name_type']?>
                    </td>
                    <td>
                        <img src="../Image/<?=$value['images']?>"  style ="width: 100px; border-radius: 5px;">
                    </td>
                    
                    <td>
                        <button class="sua">
                            <a href="index.php?btn_edit_type=<?=$value['id_type']?>">SỬA</a>
                        </button>
                        <button class="xoa">
                            <a href="index.php?btn_delete_type=<?=$value['id_type']?>">XOÁ</a>
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