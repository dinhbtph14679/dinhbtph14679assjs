
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

    <title>QUẢN LÝ BÌNH LUẬN</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">QUẢN LÝ BÌNH LUẬN</h2>
      

      <div class="table-responsive">
        
        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">ID NGƯỜI DÙNG</th>
              <th scope="col">ID SẢN PHẨM</th>
              <th scope="col">THỜI GIAN</th>
              <th scope="col">BÌNH LUẬN</th>
              <th scope="col">CHỨC NĂNG</th>

            </tr>
          </thead>
          <tbody>
          <?php foreach($list_comment as $key => $value) :?>
                <tr scope="row">
                    
                    <td><?=$value['id_comments']?></td>
                    <td><?=$value['id_user']?></td>
                    <td>
                        <?=$value['id_product']?>
                    </td>
                    <td><?=$value['date_on']?></td>
                    <td><?=$value['Content']?></td>
                    
                    <td>
                        
                        <button class="xoa">
                            <a href="index.php?btn_delete_comment=<?=$value['id_comments']?>">XOÁ</a>
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