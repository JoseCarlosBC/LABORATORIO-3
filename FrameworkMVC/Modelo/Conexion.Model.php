<?php
  /**
   *
   */
  class Conexion extends mysqli
  {

    function __construct()
    {
      // code...
      $server="sql110.tonohost.com";
      $pass="sacoloco1";
      $user="ottos_26039777";
      $base="ottos_26039777_contactos";

      parent::__construct($server,$user,$pass,$base);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die('Error en la conexion de la base de datos.') : $error="<br><br> Conectado con la base de datos: ".$base;
      //echo $error;
			unset($error);
    }
  }

 ?>
