<?php

class SQL {
    private $host = "laravel_mysql"; //db en docker
    private $dbname = "empleados";
    private $usuario = "root";
    private $password = ""; //#root
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->usuario,
                $this->password
            );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function consultar($sql) {
      try {
          $stmt = $this->conexion->prepare($sql);
          $stmt->execute();

          // Detectar tipo de consulta
          if (stripos($sql, "SELECT") === 0) {
              return $stmt->fetchAll(PDO::FETCH_ASSOC);
          } else {
              return $stmt->rowCount(); // filas afectadas
          }

      } catch (PDOException $e) {
          return "Error en la consulta: " . $e->getMessage();
      }
    }

    public function cerrar() {
        $this->conexion = null;
    }
}

?>