<?php

    include "header.php";
    include "slider.php";
    include "Class/brand_class.php";

?>

<?php

    $brand = new brand;
    $show_brand = $brand ->show_brand();

?>

<div class="admin-content-right">
            <div class="admin-content-right-category_list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Category ID</th>
                        <th>Danh mục</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php
                        if($show_brand)
                        {
                            $i = 0;
                            while($result = $show_brand->fetch_assoc()){
                                $i ++;

                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <th><?php echo $result['brand_id'] ?> </th>
                        <td><?php echo $result['category_name'] ?></td>
                        <td><?php echo $result['brand_name'] ?></td>
                        <td><a href="brandedit.php?brand_id=<?php echo $result['brand_id'] ?>">Sửa</a>|<a href="branddelete.php?brand_id=<?php echo $result['brand_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
            </div>
    </section>
</body>
</html>