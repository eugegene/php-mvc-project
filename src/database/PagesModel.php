<?php
class PagesModel extends Model
{
    public function create($title, $keywords, $description, $h1, $content)
    {
        $title = $this->db->escape($title);
        $keywords = $this->db->escape($keywords);
        $description = $this->db->escape($description);
        $h1 = $this->db->escape($h1);
        $content = $this->db->escape($content);
        $this->db->query("INSERT INTO " . DBTBL_PAGES . " (title, keywords, description, h1, content) VALUES ('$title', '$keywords', '$description', '$h1', '$content')");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM " . DBTBL_PAGES . " WHERE id = " . (int) $id);
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM " . DBTBL_PAGES);
    }

    public function find($id)
    {
        return $this->db->query("SELECT * FROM " . DBTBL_PAGES . " WHERE id = " . (int) $id);
    }

    public function update($id, $title, $keywords, $description, $h1, $content)
    {
        $title = $this->db->escape($title);
        $keywords = $this->db->escape($keywords);
        $description = $this->db->escape($description);
        $h1 = $this->db->escape($h1);
        $content = $this->db->escape($content);
        $this->db->query("UPDATE " . DBTBL_PAGES . " SET title = '$title', keywords = '$keywords', description = '$description', h1 = '$h1', content = '$content' WHERE id = " . (int) $id);
    }
}
?>