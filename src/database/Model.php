<?php
abstract class Model
{
    protected $db;

    public function __construct()
    {
        if ($this->db === null) {
            $this->db = Application::getdbInstance();
        }
    }
}
?>