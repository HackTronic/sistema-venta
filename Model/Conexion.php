<?php

class conexion{

    private $user;
    private $password;
    private $server;
    private $database;
    private $con;


    public function __construct(){

        $user = 'u670308002_root';
        $password = 'sergioA22689';
        $server = 'localhost';
        $database = 'u670308002_hacktronic';
        $this->con = new mysqli($server , $user , $password , $database);



    }

    public function getUser($usuario , $password){

        $query = $this->con->query("SELECT * FROM usuarios WHERE login='" . $usuario . "' AND password='" . $password . "'");


        $retorno=[];

        $i = 0;
        while ($fila = $query->fetch_assoc()){

            $retorno[$i] = $fila;
            $i++;

        }
        return $retorno;


    }

    public function getMenuMain(){

        $query = $this->con->query("SELECT * FROM `menu`");

        $retorno=[];

        $i = 0;
        while ($fila = $query->fetch_assoc()){

            $retorno[$i] = $fila;
            $i++;

        }
        return $retorno;





    }


 





}