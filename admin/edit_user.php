<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/dn_dk.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background: #00000025;

        }

        .card {
            margin-top: 100px;
            border-radius: 20px;
        }
    </style>
    <title>Document</title>
</head>






<body>

    <div class="col-md-6 offset-md-3">
        <!-- form card cc payment -->
        <div class="card card-outline-secondary">
            <div class="card-body">
                <h3 class="text-center">SỬA DANH MỤC</h3>
                <hr>
                <!-- <div class="alert alert-info p-2 pb-3">
                    <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a>
                    ĐỪNG ĐỂ TRỐNG NHÉ!
                </div> -->
                <br>

                <form class="form" role="form" autocomplete="off" action="index.php?edit" method="post" enctype="multipart/form-data">

                    <?php if (isset($_GET['erros'])) : ?>
                        <p style="color: red;"><?= $_GET['erros'] ?></p>
                    <?php endif ?>
                    <div class="form-group">
                        <label for="name">TÊN</label> <br>
                        <input type="hidden" name="id" value="<?= $user['id_user'] ?>">
                        <input type="text" placeholder="Họ & tên" name="name" class="form-control" id="cc_name" value="<?= $user['name_user'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="">SĐT</label> <br>
                        <input type="number" placeholder="Số điện thoại" name="phone_number" class="form-control" id="cc_name" value="<?= $user['phone_number'] ?>" />

                    </div>
                    <div class="form-group">
                        <label for="">EMAIL</label> <br>
                        <input type="email" placeholder="Email" name="email" class="form-control" id="cc_name" value="<?= $user['email'] ?>" />

                    </div>

                    <input type="hidden" name="password" value="<?= $user['password'] ?>" />

                    <div class="form-group">
                        <label for="">GIỚI TÍNH</label> <br>
                        <select name="gender" class="form-control" id="cc_name">
                            <option value="nam">Nam</option>
                            <option value="nữ">Nữ</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="">ĐỊA CHỈ</label> <br>
                        <input type="text" placeholder="Địa chỉ" name="address" class="form-control" id="cc_name" value="<?= $user['address'] ?>" />

                    </div>
                    <div class="form-group">
                        <label for="">ẢNH</label> <br>
                        <input type="file" name="avatar" class="form-control" id="cc_name" value="<?= $user['avatar'] ?>" />

                    </div>
                    <div class="form-group">
                        <label for="">VAI TRÒ</label> <br>
                        <select name="role" class="form-control" id="cc_name">
                            <option value="1">QUẢN TRỊ</option>
                            <option value="0">Thành viên</option>
                        </select>

                    </div>
                    <br>


                    <hr>
                    <div class="form-group row">
                        <!-- <button type="submit" name="submit">Submit</button>
                        <button type="reset" name="submit">Reset</button>
                        <button type="button" style="margin: 10px;"><a href="list_user.php" style=" color:white">Quay lại</a></button> -->
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-default btn-lg btn-block">XOÁ</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="edit_type" class="btn btn-success btn-lg btn-block">SỬA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form card cc payment -->
    </div>
    <br>
    <br>
    <br>
    <br>

</body>

</html>