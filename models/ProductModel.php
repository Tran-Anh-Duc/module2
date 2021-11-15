<?php
include_once "database/DBshopbeta.php";
include_once "BaseModel.php";
class ProductModel  extends  BaseModel
{
    protected string $table = "product";

    public function editProduct($data)
    {
        $sql = "UPDATE $this->table SET `name`= ?,`category`= ?,`price`= ?,`quantity`= ?,`date`= ? ,`description`= ?  WHERE `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['category']);
        $stmt->bindParam(3,$data['price']);
        $stmt->bindParam(4,$data['quantity']);
        $stmt->bindParam(5,$data['date']);
        $stmt->bindParam(6,$data['description']);
        $stmt->bindParam(7,$data['id']);
        $stmt->execute();
    }

    public function createProduct($data)
    {
        $sql = "insert into $this->table(`id`,`name`,`category`,`price`,`quantity`,`date`,`description`) values (?,?,?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$data["id"]);
        $stmt->bindParam(2,$data["name"]);
        $stmt->bindParam(3,$data["category"]);
        $stmt->bindParam(4,$data["price"]);
        $stmt->bindParam(5,$data["quantity"]);
        $stmt->bindParam(6,$data["date"]);
        $stmt->bindParam(7,$data["description"]);
        $stmt->execute();
    }

    public function search($key)
    {
        $sql = "SELECT * FROM $this->table WHERE `name` LIKE '%$key%'";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

}