<?php
class MyModel
{
    public $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllRecordsModel()
    {
        $sql = "SELECT * FROM Pictures";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function RecordModelDel($id)
    {
        $sql = "DELETE FROM Pictures where id = ".$id;
        $query = $this->db->prepare($sql);
        $query->execute();
    }


}
