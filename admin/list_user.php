

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

    <title>QUẢN LÝ KHÁCH HÀNG</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">QUẢN LÝ KHÁCH HÀNG</h2>
      

      <div class="table-responsive">
        
        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tên</th>
              <th scope="col">TÀI KHOẢN</th>
              <th scope="col">EMAIL</th>
              <th scope="col">GIỚI TÍNH</th>
              <th scope="col">ẢNH</th>
              <th scope="col">ĐỊA CHỈ</th>
              <th scope="col">QUYỀN</th>
              <th scope="col">CHỨC NĂNG</th>

            </tr>
          </thead>
          <tbody>
          <?php foreach($list_user as $key => $value) :?>
            <tr scope="row">
                    <td><?=$value['id_user']?></td>
                    <td><?=$value['name_user']?></td>
                    <td><?=$value['name_account']?></td>
                    <td><?=$value['email']?></td>
                    <td><?=$value['gender']?></td>
                    <td>
                        <img src="../Image/<?=$value['avatar']?>"  style ="width: 100px;border-radius: 5px;">
                    </td>
                    <td><?=$value['address']?></td>
                    <td><?=$value['role']?></td>
                    <td>
                        <a class="cap_quyen" href="index.php?btn_add=<?=$value['id_user']?>">CẤP QUYỀN</a>
                        <br>
                        <?php if($value['role']==1):?>
                            <a class="huy_quyen" href="index.php?btn_add_role=<?=$value['id_user']?>">HUỶ QUYỀN</a>
                        <?php endif ;?>

                        <br>
                        <button class="sua">
                            <a href="index.php?btn_edit=<?=$value['id_user']?>">SỬA</a>
                        </button>
                        <button class="xoa">
                            <a href="index.php?btn_delete=<?=$value['id_user']?>">XOÁ</a>
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