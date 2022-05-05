<?php

    include "header.php";
    include "slider.php";
    include "Class/category_class.php";

?>

<?php
    $category = new category;

    if(!isset($_GET['category_id']) || ($_GET['category_id']) == NULL)
    {
        echo "<script> window.location = 'categorylist.php'</script>";
    }
    else
    {
        $category_id = $_GET['category_id'];
    }
    
    $get_category = $category ->get_category($category_id);
    if($get_category)
    {
        $result = $get_category ->fetch_assoc();
    }
?>

<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $category_name = $_POST['category_name'];
        $update_category = $category -> update_category($category_name, $category_id);
    }

?>

<div class="admin-content-right">
            <div class="admin-content-right-category_add">
                <h1>Sửa danh mục</h1>
                <form action="" method="POST">
                    <input required name="category_name" type="text" placeholder="Nhập tên danh mục" 
                    value="<?php echo $result['category_name'] ?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>