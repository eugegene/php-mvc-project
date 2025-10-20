<?php
class UserModel extends Model
{
    public function authenticate($username, $password)
    {
        $username = $this->db->escape($username);
        $result = $this->db->query("SELECT * FROM " . DBTBL_USERS . " WHERE username = '$username' LIMIT 1");

        if ($user = $result->fetch_assoc()) {
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }

    public function create($username, $password)
    {
        $username = $this->db->escape($username);
        $password = password_hash($password, PASSWORD_BCRYPT);
        $this->db->query("INSERT INTO " . DBTBL_USERS . " (username, password) VALUES ('$username', '$password')");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM " . DBTBL_USERS . " WHERE id = " . (int) $id);
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM " . DBTBL_USERS);
    }

    public function find($id)
    {
        return $this->db->query("SELECT * FROM " . DBTBL_USERS . " WHERE id = " . (int) $id);
    }

    public function update($id, $username, $password)
    {
        $username = $this->db->escape($username);
        $password = password_hash($password, PASSWORD_BCRYPT);
        $this->db->query("UPDATE " . DBTBL_USERS . " SET username = '$username', password = '$password' WHERE id = " . (int) $id);
    }
}
?>