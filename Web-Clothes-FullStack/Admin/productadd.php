<?php

    include "header.php";
    include "slider.php";
    include "Class/product_class.php";

?>

<?php
    $product = new product;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $insert_product = $product -> insert_product($_POST, $_FILES);
    }
?>

        <div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text">
                    <label for="">Chọn danh mục<span style="color: red;">*</span></label>
                    <select name="category_id" id="category_id">
                        <option value="">--Chọn--</option>
                        <?php
                            $show_category = $product -> show_category();
                            if($show_category)
                            {
                                while($result = $show_category -> fetch_assoc())
                                {
                        ?>
                        <option value="<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></option>
                        <?php
                                }
                            }
                        ?>
                        
                    </select>
                    <label for="">Chọn loại sản phẩm<span style="color: red;">*</span></label>
                    <select name="brand_id" id="brand_id">
                        <label for="">Chọn loại sản phẩm<span style="color: red;">*</span></label>
                        <option value="">--Chọn--</option>
                        
                    </select>
                    <label for="">Giá sản phẩm<span style="color: red;">*</span></label>
                    <input name="product_price" required type="text">
                    <label for="">Giá khuyến mãi<span style="color: red;">*</span></label>
                    <input name="product_price_new" required type="text">
                    <label for="">Mô tả sản phâm<span style="color: red;">*</span></label>
                    <textarea name="product_desc" id="editor" cols="30" rows="10"></textarea>
                    <label for="">Ảnh sản phâm<span style="color: red;">*</span></label>
                    <input name="product_img" required type="file">
                    <label for="">Ảnh mô tả<span style="color: red;">*</span></label>
                    <input name="product_img_desc[]" required type="file" multiple>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
    <script> 
    CKEDITOR.replace( 'editor', {
	filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    } );
    </script>
</body>
</html>