<?php
require_once "./mvc/models/MyModels.php";
class ProductModels extends MyModels
{
    protected $table = "Product";

    public function findByCategoryName($select = NULL, $cateName, $orderBy = NULL, $order = "DESC") {
        $select = implode(",",$select);
        if($orderBy) {
            $sql = "SELECT $select 
                    FROM $this->table JOIN Product_Category ON Product.Product_category_id = Product_Category.ID  
                    WHERE Product_Category.Category_name = '$cateName' 
                    ORDER BY Product.".$orderBy." $order";
        } else {
            $sql = "SELECT $select 
                    FROM $this->table JOIN Product_Category ON Product.Product_category_id = Product_Category.ID  
                    WHERE Product_Category.Category_name = '$cateName'";
        }
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>