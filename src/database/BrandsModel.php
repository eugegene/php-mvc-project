<?php
class BrandsModel extends Model
{
    public function create($name)
    {
        $name = $this->db->escape($name);
        $this->db->query("INSERT INTO " . DBTBL_BRANDS . " (name) VALUES ('$name')");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM " . DBTBL_BRANDS . " WHERE id = " . (int) $id);
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM " . DBTBL_BRANDS);
    }

    public function find($id)
    {
        return $this->db->query("SELECT * FROM " . DBTBL_BRANDS . " WHERE id = " . (int) $id);
    }

    public function update($id, $name)
    {
        $name = $this->db->escape($name);
        $this->db->query("UPDATE " . DBTBL_BRANDS . " SET name = '$name' WHERE id = " . (int) $id);
    }
}
?>