<?php

class User 
{
	function __construct()
	{

	}
	public function ValidarUsuario()
	{
		//echo"en controler User y metodo ValidarUsuario<br>";
		//var_dump($_POST);
		session_start();
		$user=new Usuarios();
		$smarty =new Smarty();
		
		$usuario=$_POST['usuario'];
		$pass=$_POST['password'];
		$tipo=$_POST['tipo'];
		

		$dato=$user->BuscarUsuario($usuario, $pass, $tipo);

         if($dato->num_rows==1)
         {
           $ar=array();

        while($row=mysqli_fetch_assoc($dato))
        {
            //echo $row['user']."---".$row['tipo'];
            $_SESSION['user']=$row['user'];
            $_SESSION['tipo']=$row['tipo'];

            $smarty->assign('usuario',$_SESSION['user']);
            $smarty->assign('tipo',$_SESSION['tipo']);
            $smarty->display('Default.tpl');
        }
          
         }
         else
         {

         }


	}
}
?>
