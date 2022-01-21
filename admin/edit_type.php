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
                <h3 class="text-center">SỬA DANH MỤC</h3>
                <hr>
                <!-- <div class="alert alert-info p-2 pb-3">
                    <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                    ĐỪNG ĐỂ TRỐNG NHÉ!
                </div> -->
                <br>
                <?php
                require_once '../dao/type_product.php';
                $id = $_GET['btn_edit_type'];
                $type = type_products_select_by_id($id);
                ?>
                <form class="form" role="form" autocomplete="off" method="post" action="index.php?edit_type" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id_type" value="<?= $type['id_type'] ?>">
                        <label for="cc_name">TÊN DANH MỤC</label>
                        <input type="text" name="name_type" class="form-control" id="cc_name" value="<?= $type['name_type'] ?>">
                    </div>
                    <div class="form-group">
                        <label>ẢNH DANH MỤC</label> <br>

                        <input type="file" name="images" class="form-control" id="cc_name" value="<?= $type['images'] ?>">
                        <?php if (isset($_GET['image'])) : ?>
                            <p style="color: red;"><?= $_GET['image'] ?></p>
                        <?php endif ?>
                    </div>
                    <br>


                    <hr>
                    <div class="form-group row">
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
</body>