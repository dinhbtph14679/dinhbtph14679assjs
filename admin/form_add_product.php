<div>
    <form action="index.php?add_product" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Ten</label>
            <input type="text" name="name">
        </div>
        
        <div>
            <label for="">loai</label>
           <select name="id_type" id="">
               <?php foreach($list_type as $key => $value) : ?>
               <option value="<?=$value['id_type']?>"><?=$value['name_type']?></option>
               <?php endforeach ; ?>
           </select>
        </div>
       
        <div>
            <label for="">Gia</label>
            <input type="number" name="price">
        </div>
        <div>
            <label for="">anh</label>
            <input type="file" name="image">
        </div>
        
        <div>
            <label for="">mo ta</label>
            <input type="text" name="description">
        </div>
       
        <div>
            <label for="">so luong</label>
            <input type="number" name="quantyti">
        </div>
        <div>
            <label for="">kich co</label>
            <input type="text" name="size">
        </div>
        
        <div>
            <label for="">mau</label>
            <input type="text" name="colors">
        </div>
       
        <div>
            <label for="">giam gia</label>
            <input type="text" name="discount">
        </div>
       <button type="submit">submit</button>
       <button type="reset">reset</button>
    </form>
</div>