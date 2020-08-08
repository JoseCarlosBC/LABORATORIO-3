<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-14 03:32:14
  from 'C:\xampp\htdocs\FRAMEWORK\FrameworkMVC\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0d0b1ef31ec7_41329482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdeb2a9801a2056ef17d65d96382e7eaae526eeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FRAMEWORK\\FrameworkMVC\\templates\\Login.tpl',
      1 => 1594690331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d0b1ef31ec7_41329482 (Smarty_Internal_Template $_smarty_tpl) {
?></br></br></br>
	<div align="center" id="ENCABEZADO">
        <h1>LOGIN</h1>
    </div>
</br>
    <div class="container-fluid" id="CONTENIDO">
        <div class="row justify-content-center" >
            <div class="col-4 " >
                <form method="post" action="?controller=User&action=ValidarUsuario"> <!--Falda la dirreccion -->
                    <div class="form-group " >
                        <label for="usuario">Usuario</label>
                        <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
                        <small id="usuario" class="form-text text-muted">Ingrese su usuario</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <small id="usuario" class="form-text text-muted">Ingrese password de usuario</small>
                    </div>
                    <select class="form-control" id="tipo" name="tipo">
                        <option value="Trabajador">Trabajador</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                    </br></br>
					<div align="center">
                      <button type="submit" class="btn btn-primary" >Ingresar</button>
					</div>
                </form>
            </div>
        </div>
    </div>

<?php }
}
