<?php
class ProductsModel extends Model
{
    public function create($name, $brand_id, $price)
    {
        $name = $this->db->escape($name);
        $brand_id = (int) $brand_id;
        $price = (float) $price;
        $this->db->query("INSERT INTO " . DBTBL_PRODUCTS . " (name, brand_id, price) VALUES ('$name', $brand_id, $price)");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM " . DBTBL_PRODUCTS . " WHERE id = " . (int) $id);
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM " . DBTBL_PRODUCTS);
    }

    public function find($id)
    {
        return $this->db->query("SELECT * FROM " . DBTBL_PRODUCTS . " WHERE id = " . (int) $id);
    }

    public function update($id, $name, $brand_id, $price)
    {
        $name = $this->db->escape($name);
        $brand_id = (int) $brand_id;
        $price = (float) $price;
        $this->db->query("UPDATE " . DBTBL_PRODUCTS . " SET name = '$name', brand_id = $brand_id, price = $price WHERE id = " . (int) $id);
    }

    public function getAllWithBrands()
    {
        return $this->db->query("SELECT p.*, b.name as brand_name 
                            FROM " . DBTBL_PRODUCTS . " p 
                            LEFT JOIN " . DBTBL_BRANDS . " b 
                            ON p.brand_id = b.id");
    }
}
?>