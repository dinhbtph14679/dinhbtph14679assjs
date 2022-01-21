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
                <h3 class="text-center">SỬA SẢN PHẨM</h3>
                <hr>
                <!-- <div class="alert alert-info p-2 pb-3">
                    <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                    ĐỪNG ĐỂ TRỐNG NHÉ!
                </div> -->
                <br>

                <form class="form" role="form" autocomplete="off" action="index.php?edit_product" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $product['id'] ?>">

                    <div class="form-group">
                        <label for="cc_name">LOẠI</label>
                        <select name="id_type" class="form-control" id="cc_name">
                            <?php foreach ($list_type as $key => $value) : ?>
                                <option value="<?= $value['id_type'] ?>"><?= $value['name_type'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>TÊN</label> <br>
                        <input type="text" name="name" class="form-control" id="cc_name" value="<?= $product['name'] ?>">
                    </div>

                    <div class="row">
                        <label class="col-md-12">GIÁ</label>
                    </div>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="text" name="price" class="form-control" id="cc_name" value="<?= $product['price'] ?>">
                            <div class="input-group-prepend"><span class="input-group-text">.VNĐ</span></div>
                        </div>
                    </div>

                    <br>
                    
                    <div class="form-group">
                        <label>ẢNH</label> <br>
                        <input type="file" name="images" class="form-control" id="cc_name" value="<?= $product['image'] ?>">
                        <?php if (isset($_GET['image'])) : ?>
                            <p style="color: red;"><?= $_GET['image'] ?></p>
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label>MÔ TẢ</label> <br>
                        <input type="text" name="description" class="form-control" id="cc_name" value="<?= $product['description'] ?>">

                    </div>
                    <div class="form-group">
                        <label>SỐ LƯỢNG</label> <br>
                        <input type="text" name="quantyti" class="form-control" id="cc_name" value="<?= $product['quantyti'] ?>">

                    </div>


                    <div class="row">
                        <label class="col-md-12">SIZE</label>
                    </div>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="text" name="size" class="form-control" id="cc_name" value="<?= $product['size'] ?>">
                            <div class="input-group-prepend"><span class="input-group-text">inch</span></div>
                            <!-- <div class="input-group-append"><span class="input-group-text">.00</span></div> -->
                        </div>
                    </div>

                    <br>
                    
                    <div class="form-group">
                        <label>MÀU</label> <br>
                        <input type="text" name="colors" class="form-control" id="cc_name" value="<?= $product['colors'] ?>">

                    </div>

                    <div class="row">
                        <label class="col-md-12">CHIẾT KHẤU</label>
                    </div>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="text" name="discount" class="form-control" id="cc_name" value="<?= $product['discount'] ?>">
                            <div class="input-group-prepend"><span class="input-group-text">.VNĐ</span></div>
                            <!-- <div class="input-group-append"><span class="input-group-text">.00</span></div> -->
                        </div>
                    </div>



                    <hr>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-default btn-lg btn-block">XOÁ</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-lg btn-block">SỬA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form card cc payment -->
    </div>
</body>