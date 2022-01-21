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
<!------ Include the above in your HEAD tag ---------->

<body>
    <div class="col-md-6 offset-md-3">


        <!-- form card cc payment -->

        <div class="card card-outline-secondary">
            <div class="card-body">
                <h3 class="text-center">SỬA ĐƠN HÀNG</h3>
                <hr>
                <!-- <div class="alert alert-info p-2 pb-3">
                    <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                    ĐỪNG ĐỂ TRỐNG NHÉ!
                </div> -->
                <br>

                <form class="form" role="form" autocomplete="off" method="post" action="index.php">
                    <?php if (isset($_GET['erros'])) : ?>
                        <p style="color: red;"><?= $_GET['erros'] ?></p>
                    <?php endif ?>
                    <input type="hidden" name="id_order" value="<?= $id ?>">
                    <input type="hidden" name="id_user" value="<?= $order['id_user'] ?>">
                    <input type="hidden" name="id_type" value="<?= $order['id_order'] ?>">
                    <div class="form-group">
                        <label for="cc_name">TÊN KHÁCH HÀNG</label>
                        <input type="text" disabled="disabled" name="name_type" class="form-control" id="cc_name" value="<?= $order['name_user'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="cc_name">ĐỊA CHỈ GIAO HÀNG</label>
                        <input type="text" name="address_order" class="form-control" id="cc_name" value="<?= $order['address_order'] ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        
                        <?php if ($order['status']== 1) : ?>
                            <label for="cc_name">TRẠNG THÁI</label>
                            <select name="status" class="form-control" id="cc_name">
                                <option value="0">Chưa thanh toán!</option>
                                <option value="1">Đã thanh toán!</option>
                            </select>
                        <?php else : ?>
                            <label for="cc_name">TRẠNG THÁI</label>
                            <select name="status" class="form-control" id="cc_name">
                                <option selected value="1">Đã thanh toán!</option>
                            </select>
                        <?php endif; ?>
                    </div>
                    <br>
                    <hr>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-default btn-lg btn-block">XOÁ</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="edit_order" class="btn btn-success btn-lg btn-block">SỬA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form card cc payment -->
    </div>
</body>