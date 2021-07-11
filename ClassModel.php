<?php
require_once "model/DatebaseModel.php";

class ClassModel() extends DatabaseModel {
    public $idClass;
    public $nameClass;
  
    public function getAllClass() {
        $con = $this->open();
        $sql = " SELECT * FORM `Class`";
        $result = mysqli_querry($con,$sql);
        $this->close(con);
        $arrayClass = [];
        foreach ($result as $each) {
            $class = new ClassModel();
            $class->idClass = $each["idClass"];
            $class->nameClass = $each["nameClass"];
            array_push($arrayClass, $class);

       }
        var_dump($arrayClass);
        return $result;

    }

    public function getById($id) {
        $con = $this->open();
        $sql = " SELECT * FORM `Class` where idClass = $id";
        $result = mysqli_querry($con,$sql);
        $this->close(con);
        $item = mysqily_fetch_assoc($result);
        $class->idClass = $item["idClass"];
        $class->nameClass = $item["nameClass"];
        return $class;
    }

    public function update() {
        $con = $this->open();
        $sql = "UPDATE Class SET nameClass ='$this->nameClass' WHERE idClass=$this->$idClass";
        mysqli_query($con,$sql);
        $this->close($con);
    }
}