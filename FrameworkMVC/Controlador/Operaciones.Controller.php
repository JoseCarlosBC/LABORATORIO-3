<?php

class Operaciones
{
	public function VentanaCrearUsuario()
	{
      $smarty=new Smarty();
      session_start();

      $smarty->assign('ventana','vcu');
      $smarty->assign('usuario',$_SESSION['user']);
      $smarty->assign('tipo',$_SESSION['tipo']);
      $smarty->display('Default.tpl');
	}

    public function VentanaHDUser()
	{
      $smarty=new Smarty();
      session_start();

      $smarty->assign('ventana','vhdu');
      $smarty->assign('usuario',$_SESSION['user']);
      $smarty->assign('tipo',$_SESSION['tipo']);
      $smarty->display('adm.php');
	}

	public function VentanaVerInventario()
	{
      $smarty=new Smarty();
      session_start();

      $smarty->assign('ventana','vvi');
      $smarty->assign('usuario',$_SESSION['user']);
      $smarty->assign('tipo',$_SESSION['tipo']);
      $smarty->display('Default.tpl');
	}

	public function VentanaLogin()
	{
      $smarty=new Smarty();
      session_start();

      $smarty->assign('ventana','va');
      $smarty->assign('usuario',$_SESSION['user']);
      $smarty->assign('tipo',$_SESSION['tipo']);
      $smarty->display('Login.tpl');
	}
	public function Framework()
	{
	  $smarty=new Smarty();
      session_start();
	  $con=new Conexion();
	  $cancion=$_POST['cancion'];
	  $artista=$_POST['artista'];
	  $genero=$_POST['genero'];
	  $album=$_POST['album'];
	  $info=$_POST['info'];
	  $query="INSERT INTO `carrito`(`cancion`, `artista`, `genero`, `album`, `info`) VALUES ('$cancion','$artista','$genero','$album','$info');";
	  $consulta=$con->query($query);
	  $con->close();				  	
	  $smarty->display('admin.php');
    }	
	public function VerCanciones()
	{
	  $smarty=new Smarty();
      session_start();
	  $con=new Conexion();
	  $query="SELECT * FROM `carrito` WHERE 1;";
	  $consulta=$con->query($query);
	  $con->close();
	  $ar=array();
	  while($row=mysqli_fetch_assoc($consulta))
	  {
	     array_push($ar,$row);
	  }
	  $smarty->assign('datos',$ar);
	  $smarty->display('adm.php');
	}
}
?>