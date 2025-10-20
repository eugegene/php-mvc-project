<?php
class SessionModel extends Model
{
    public function create($user_id)
    {
        $session_id = session_id();
        $token = bin2hex(random_bytes(32));
        $expires_at = date('Y-m-d H:i:s', strtotime('+24 hours'));

        $user_id = (int) $user_id;
        $session_id = $this->db->escape($session_id);
        $token = $this->db->escape($token);

        $this->db->query("INSERT INTO " . DBTBL_SESSIONS . " 
            (user_id, session_id, token, expires_at) 
            VALUES ($user_id, '$session_id', '$token', '$expires_at')");

        return $token;
    }

    public function validate($token)
    {
        $token = $this->db->escape($token);
        $now = date('Y-m-d H:i:s');

        $result = $this->db->query("SELECT user_id FROM " . DBTBL_SESSIONS . "
            WHERE token = '$token' 
            AND expires_at > '$now'
            LIMIT 1");

        if ($session = $result->fetch_assoc()) {
            return $session['user_id'];
        }
        return false;
    }

    public function delete($token)
    {
        $token = $this->db->escape($token);
        $this->db->query("DELETE FROM " . DBTBL_SESSIONS . " WHERE token = '$token'");
    }

    public function cleanup(): void
    {
        $now = date('Y-m-d H:i:s');
        $this->db->query("DELETE FROM " . DBTBL_SESSIONS . " WHERE expires_at <= '$now'");
    }
}
?>