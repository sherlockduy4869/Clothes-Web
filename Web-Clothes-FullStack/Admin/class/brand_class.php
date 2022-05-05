<?php
include "database.php";
?>

<?php
class brand{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function insert_brand($category_id, $brand_name)
    {
        $query = "INSERT INTO tbl_brand (category_id, brand_name) VALUES('$category_id','$brand_name')";
        $result = $this ->db->insert($query);
        //header('Location:brandlist.php');
        return $result;
    }

    public function show_category()
    {
        $query = "SELECT * FROM tbl_category ORDER BY category_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    public function get_category($category_id)
    {
        $query = "SELECT * FROM tbl_category WHERE category_id = '$category_id'";
        $result = $this ->db->select($query);
        return $result;
    }

    public function update_category($category_name, $category_id)
    {
        $query = "UPDATE tbl_category SET category_name = '$category_name' WHERE category_id = '$category_id'";
        $result = $this ->db->update($query);
        header('Location:categorylist.php');
        return $result;
    }

    public function delete_category($category_id)
    {
        $query = "DELETE FROM tbl_category WHERE category_id = '$category_id'";
        $result = $this ->db->delete($query);
        header('Location:categorylist.php');
        return $result;
    }
}
?>