<?php 
namespace modelo;

use PDOException;

include_once "conexion.php";

Class EquipoComputo
{
private $id;
private $anydesk;
private $conexion;
private $nombre;
private $ip;
private $responsable;
private $fechaMantenimiento;


public function __construct()
{
$this->conexion = new \Conexion();
}


public function create(){
try {
    $request = $this->conexion->getConPDO()->prepare("INSERT INTO equiposcomputo(nombreEquipo, anydesk, ip, responsable, fechaMantenimiento) VALUES(?, ?, ?, ?, ?)");
    $request->bindParam(1, $this->nombre);
    $request->bindParam(2, $this->anydesk);
    $request->bindParam(3, $this->ip);
    $request->bindParam(4, $this->responsable);
    $request->bindParam(5, $this->fechaMantenimiento);
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

public function getNombre()
{
    return $this->nombre;
}

/**
 * Set the value of nombreRol
 */
public function setNombre($nombre): self
{
    $this->nombre = $nombre;

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


public function getIp()
{
    return $this->ip;
}

/**
 * Set the value of nombreRol
 */
public function setIp($ip): self
{
    $this->ip = $ip;

    return $this;
}





public function getResponsable()
{
    return $this->responsable;
}

/**
 * Set the value of nombreRol
 */
public function setResponsable($responsable): self
{
    $this->responsable = $responsable;

    return $this;
}



public function getFechaMantenimiento()
{
    return $this->fechaMantenimiento;
}

/**
 * Set the value of nombreRol
 */
public function setFechaMantenimiento($fechaMantenimiento): self
{
    $this->fechaMantenimiento = $fechaMantenimiento;

    return $this;
}



}




