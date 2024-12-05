<?php

class Cita {
    private $id;
    private $usuario_id;
    private $fecha;
    private $hora;
    private $estado;

    public function __construct() {
        // Constructor vacío
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsuarioId($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuarioId() {
        return $this->usuario_id;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getEstado() {
        return $this->estado;
    }

    public static function getAllCitas($pdo) {
        $stmt = $pdo->prepare("SELECT * FROM citas");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Cita');
    }
}