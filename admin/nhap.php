<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/admin/thong_ke.css">
<link rel="stylesheet" href="./../css/admin/bootstrap/style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <title>Thống kê</title>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<div>
    <h2 class="mb-5">Thống kê</h2>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Loại sản phẩm</th>
            <th>Số lượng</th>
            <th>Gía cao</th>
            <th>Gía thấp</th>
            <th>Gía trung bình</th>
            <th>Doanh thu</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($list_statistical as $key => $value ) :?>
                <tr>
                    <td><?=$value['id_type']?></td>
                    <td><?=$value['name_type']?></td>
                    <td><?=$value['soluong']?></td>
                    <td><?php $number = $value['giacao'];
                    echo number_format($number);
                    ?></td>
                     <td><?php $number = $value['giathap'];
                    echo number_format($number);
                    ?></td>
                    <td><?php $number = $value['giatb'];
                    $number_format1 = $number + 0;
                    echo number_format($number_format1);
                    ?></td>
                    <td><?php $number = $value['doanhthu'];
                    echo number_format($number);
                    ?></td>
                </tr>
            <?php endforeach; ?>    
        </tr>
    </tbody>
</table>