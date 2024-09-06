<?php
class Conexion{
    private $user;
    private $password;
    private $server;
    private $database;
    private $con;

    public function __construct()
    {
        $user ='root';
        $password ='';
        $server ='localhost';
        $database ='icontpos';
        $this->con = new mysqli($server, $user, $password, $database);
    }
        
}
    
?>