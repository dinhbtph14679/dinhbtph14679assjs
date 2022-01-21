<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    body {
        background: #00000025;

    }

    .card {
        margin-top: 50px;
        border-radius: 20px;
    }
</style>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div class="col-md-6 offset-md-3">

        <!-- form card cc payment -->
        <div class="card card-outline-secondary">
            <div class="card-body">
                <h3 class="text-center">THÊM SẢN PHẨM</h3>
                <hr>
                <div class="alert alert-info p-2 pb-3">
                    <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a>
                    ĐỪNG ĐỂ TRỐNG NHÉ!
                </div>


                <?php if (isset($_GET['erros'])) : ?>
                    <p style="color: red;"><?= $_GET['erros'] ?></p>
                <?php endif ?>


                <form class="form" role="form" autocomplete="off" action="index.php?add_product" method="post" enctype="multipart/form-data">
                    <div>
                        <input type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <label for="cc_name">LOẠI</label> <br>
                        <select name="id_type" class="form-control" id="cc_name">
                            <?php foreach ($list_type as $key => $value) : ?>
                                <option value="<?= $value['id_type'] ?>"><?= $value['name_type'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cc_name">TÊN</label>
                        <input type="text" name="name" class="form-control" id="cc_name" title="First and last name">
                    </div>

                    <div class="row">
                        <label class="col-md-12">GIÁ</label>
                    </div>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="number" name="price" class="form-control" id="cc_name" title="First and last name">
                            <div class="input-group-prepend"><span class="input-group-text">.VNĐ</span></div>
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="form-group">
                        <label for="cc_name">ẢNH</label>
                        <input type="file" name="images" class="form-control" id="cc_name" title="First and last name">
                    </div>
                    <div class="form-group">
                        <label for="cc_name">MÔ TẢ</label>
                        <input type="text" name="description" class="form-control" id="cc_name" title="First and last name">
                    </div>
                    <div class="form-group">
                        <label for="cc_name">SỐ LƯỢNG</label>
                        <input type="number" name="quantyti" class="form-control" id="cc_name" title="First and last name">
                    </div>

                    <div class="row">
                        <label class="col-md-12">SIZE</label>
                    </div>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="text" name="size" class="form-control" id="cc_name" title="First and last name">
                            <div class="input-group-prepend"><span class="input-group-text">inch</span></div>
                        </div>
                    </div>

                    <br>
                    
                    <div class="form-group">
                        <label for="cc_name">MÀU</label>
                        <input type="text" name="colors" class="form-control" id="cc_name" title="First and last name">
                    </div>

                    <div class="row">
                        <label class="col-md-12">CHIẾT KHẤU</label>
                    </div>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="text" name="discount" class="form-control text-right" id="exampleInputAmount">
                            <div class="input-group-prepend"><span class="input-group-text">.VNĐ</span></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-default btn-lg btn-block">XOÁ</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-lg btn-block">THÊM</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <br>

        <!-- /form card cc payment -->
</body>