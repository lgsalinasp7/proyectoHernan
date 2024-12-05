<?php

require_once __DIR__ . '/../models/Cita.php';

class CitasController
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function index()
    {
        $citas = Cita::getAllCitas($this->db);
        require_once __DIR__ . '/../views/citas/index.php';
    }
}