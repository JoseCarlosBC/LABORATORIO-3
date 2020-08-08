<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-08 09:53:34
  from 'C:\xampp\htdocs\FrameworkMVC\templates\AdminCrearUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f057b7ec02380_79852924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c7f138d332cae832dc141487e5ba5ff2c911db9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FrameworkMVC\\templates\\AdminCrearUser.tpl',
      1 => 1594194810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f057b7ec02380_79852924 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div align="center">

   
        <h1>CREAR USUARIO</h1>
          </div>
          <br>
           <div class="col">
        <form method="post" action=""> 
    <div class="form-group " >
        <label for="usuario">Usuario</label>
        <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
        </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <small id="usuario" class="form-text text-muted">Ingrese password de usuario</small>
                    </div><br>
                    <div class="form-group">
                    <label for="tipo">Tipo Trabajador</label>
                    <select class="form-control" id="tipo" name="tipo">
                        <option value="Trabajador">Trabajador</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                    </div><br/>
                     <br/>
                    <button type="submit" class="btn btn-primary" >Guardar Usuario</button>
                </form>
           
        </div>
        </div>
    </div>

<?php }
}
