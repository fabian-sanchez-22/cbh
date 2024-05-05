<?php 
namespace modelo;

use PDOException;

include_once "conexion.php";

Class EquipoComputo
{
private $id;
private $anydesk;
private $conexion;


public function __construct()
{
$this->conexion = new \Conexion();
}


public function create(){
try {
    $request = $this->conexion->getConPDO()->prepare("INSERT INTO equiposcomputo(anydesk) VALUES(?)");
    $request->bindParam(1, $this->anydesk);
    $request->execute();
    return "Equipo $this->anydesk creado";
} catch (PDOException $e) {
    return "Error: " . $e->getMessage();
}
}


public function read (){
try {
    $sql = $this->conexion->getConPDO()->prepare("SELECT * FROM equiposcomputo");
    $sql->execute();
    $response = $sql->fetchAll(\PDO::FETCH_ASSOC);
    return $response;
} catch (PDOException $e) {
    return "Error" . $e->getMessage();
}
}


public function update(){
try {
    $sql = $this->conexion->getConPDO()->prepare("UPDATE equiposcomputo SET anydesk=? WHERE id =?");
        $sql->bindParam(1, $this->anydesk);
        $sql->bindParam(2, $this->id);
        $sql->execute();
} catch (PDOException $e) {
    return "Error" . $e->getMessage();
}
}


public function delete(){
    try {
        $sql = $this->conexion->getConPDO()->prepare("DELETE FROM equiposcomputo WHERE id=?");
        $sql->bindParam(1, $this->id);
        $sql->execute();
        return "Equipo Eliminado";
    } catch (PDOException $e) {
        return "Error" . $e->getMessage();
    }
    }


public function readUpdate(){
    
    try {
        $sql = $this->conexion->getConPDO()->prepare("SELECT * FROM equiposcomputo WHERE id=?");
        $sql->bindParam(1, $this->id);
        $sql->execute();
        $result = $sql->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        return "Error: " .$e->getMessage();
    }
}








public function getId()
{
    return $this->id;
}

/**
 * Set the value of id
 */
public function setId($id): self
{
    $this->id = $id;

    return $this;
}


public function getAnydesk()
{
    return $this->anydesk;
}

/**
 * Set the value of nombreRol
 */
public function setAnydesk($anydesk): self
{
    $this->anydesk = $anydesk;

    return $this;
}

}




