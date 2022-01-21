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

  <title>QUẢN LÝ ĐƠN HÀNG</title>
</head>

<body>


  <div class="content">

    <div class="container">
      <h2 class="mb-5">QUẢN LÝ ĐƠN HÀNG</h2>


      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tên</th>
              <th scope="col">THỜI GIAN</th>
              <th scope="col">ĐỊA CHỈ</th>
              <th scope="col">THÀNH TIỀN</th>
              <th scope="col">TRẠNG THÁI</th>
              <th scope="col">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($list_order as $key => $value) : ?>
              <tr scope="row">
                <td><?= $value['id_order'] ?></td>
                <td><?= $value['name_user'] ?></td>
                <td><?= $value['date_on'] ?></td>
                <td><?= $value['address_order'] ?></td>
                <td><?= $value['totail'] ?>.VNĐ</td>
                <td><?= $value['status'] == 0 ? 'Chưa thanh toán!' : 'Đã thanh toán!' ?></td>

                <td>
                  <button class="sua">
                    <a href="list_order_detals.php?btn_ct=<?= $value['id_order'] ?>">CHI TIẾT</a>
                  </button>
                  <button class="sua">
                    <a href="index.php?btn_edit_order=<?= $value['id_order'] ?>">SỬA</a>
                  </button>
                  <button class="xoa">
                    <a href="index.php?delete_order=<?= $value['id_order'] ?>">XOÁ</a>
                  </button>
                </td>



              </tr>
            <?php endforeach; ?>


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