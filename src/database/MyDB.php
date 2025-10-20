<?php
class MyDB
{
    private $db_Database = "phpmvc_db";
    private $db_Host = "localhost";
    private $db_Username = "root";
    private $db_Password = "";
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new mysqli($this->db_Host, $this->db_Username, $this->db_Password, $this->db_Database);
            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }
        } catch (Exception $e) {
            die("Database connection error: " . $e->getMessage());
        }
    }

    public function query($sql)
    {
        $result = $this->connection->query($sql);
        if ($result === false) {
            throw new Exception("Query failed: " . $this->connection->error);
        }
        return $result;
    }

    public function escape($string)
    {
        return $this->connection->real_escape_string($string);
    }

    public function close()
    {
        $this->connection->close();
    }
}
?>