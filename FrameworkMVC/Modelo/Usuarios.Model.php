<?php
   class Usuarios
   {
   	public function BuscarUsuario($user, $pass, $tipo)
   	{
   		$con=new Conexion();
   		$q="SELECT * FROM `usuario` WHERE `user`='$user' AND `password`='$pass' AND `tipo`='$tipo';";
   		$usuario=$con->query($q);
         $con->close();
   		return $usuario;
   	}
   }
?>