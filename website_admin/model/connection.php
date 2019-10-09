<?php

    // require_once $_SERVER['DOCUMENT_ROOT'].'./website_admin/config/configurations.php';

    class Databases
    {
        private $host = 'localhost';
        private $dbname = 'acajutladestinos';
        private $user = 'root';
        private $password = '';
        private $charset = 'utf8';
        private $conn;

        function __Conexion()
        {
            try {
                $options = array(
                        PDO::ATTR_PERSISTENT=>true,
                        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                );

                $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->password, $options);

                $this->conn->exec('SET NAMES '.$this->charset.'');

                // echo 'La conexión es correcta!!! Felicidades';

            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
                die();
            }

            return $this->conn;
        }
    }

?>