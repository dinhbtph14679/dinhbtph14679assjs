<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login_sigup.css">
    <title>Document</title>
</head>

<body>
    <div class="container_all">
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="singin.php" method="post" enctype="multipart/form-data">
                    <h1>Đăng ký</h1>
                    <?php if (isset($_GET['erros'])) : ?>
                        <p style="color: red;"><?= $_GET['erros'] ?></p>
                    <?php endif ?>
                    <span>Hãy đăng ký tài khoản của bạn</span>
                    <input type="text" placeholder="Họ & tên" name="name" />
                    <input type="number" placeholder="Số điện thoại" name="phone_number" />
                    <input type="email" placeholder="Email" name="email" />
                    <input type="password" placeholder="Mật khẩu" name="password" />
                    <input type="text" placeholder="Địa chỉ" name="address" />
                    <div>
                        <select name="gender" id="">
                            <option value="nam">nam</option>
                            <option value="nu">nữ</option>
                        </select>
                        <input type="file" name="avatar" />
                    </div>
                    <button type="submit" name="submit">Đăng kí</button>
                    <button type="button" style="margin: 10px;"><a href="../user/index.php" style=" color:white">Quay
                            lại</a></button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="login.php" method="post">
                    <h1>Đăng nhập</h1>
                    <?php if (isset($_GET['erros'])) : ?>
                        <p style="color: red;"><?= $_GET['erros'] ?></p>
                    <?php endif ?>
                    <span>Hãy đăng nhập tài khoản của bạn</span>
                    <input type="email" name="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Mật khẩu" />
                    <a href="#">Quên mật khẩu?</a>
                    <button type="submit" name="submit">Đăng nhập</button>
                    <button type="button" style="margin: 10px;"><a href="../user/index.php" style=" color:white">Quay
                            lại</a></button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <img src="./../Image/logo_white02.png" alt="" width="100px">
                        <!-- <h1>Poly Mac</h1> -->
                        <p>Hãy đăng nhập vào tài khoản của bạn từ <b>Poly Mac</b> bạn sẽ được mua sắm, bình luận về sản
                            phẩm của chúng tôi.
                            Sản phẩm của chúng tôi cũng sẽ là sản phẩm của bạn. <b>HÃY KHÁM PHÁ NGAY!.</b> </p>

                        <button class="ghost" id="signIn">Đăng nhập</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <img src="./../Image/logo_white02.png" alt="" width="100px">
                        <!-- <h1>Poly Mac</h1> -->
                        <p>Hãy đăng ký vào tài khoản của bạn từ <b>Poly Mac</b> bạn sẽ được mua sắm, bình luận về sản
                            phẩm của chúng tôi.
                            Sản phẩm của chúng tôi cũng sẽ là sản phẩm của bạn. <b>HÃY KHÁM PHÁ NGAY!.</b> </p>
                        <button class="ghost" id="signUp">Đăng ký</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="./dn_dk.js"></script>
</body>

</html>