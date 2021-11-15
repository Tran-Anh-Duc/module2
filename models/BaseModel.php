<?php
include_once "database/DBshopbeta.php";
class BaseModel
{
    protected string $table;
    protected $dbConnect;

    public function __construct()
    {
        $dbshopbeta = new DBshopbeta();
        $this->dbConnect = $dbshopbeta->connect();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $sql = "select * from $this->table where id= $id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }

}