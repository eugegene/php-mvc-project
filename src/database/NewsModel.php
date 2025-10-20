<?php
class NewsModel extends Model
{
    public function create($title, $content)
    {
        $title = $this->db->escape($title);
        $content = $this->db->escape($content);
        $this->db->query("INSERT INTO " . DBTBL_NEWS . " (title, content) VALUES ('$title', '$content')");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM " . DBTBL_NEWS . " WHERE id = " . (int) $id);
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM " . DBTBL_NEWS);
    }

    public function find($id)
    {
        return $this->db->query("SELECT * FROM " . DBTBL_NEWS . " WHERE id = " . (int) $id);
    }

    public function update($id, $title, $content)
    {
        $title = $this->db->escape($title);
        $content = $this->db->escape($content);
        $this->db->query("UPDATE " . DBTBL_NEWS . " SET title = '$title', content = '$content' WHERE id = " . (int) $id);
    }
}
?>