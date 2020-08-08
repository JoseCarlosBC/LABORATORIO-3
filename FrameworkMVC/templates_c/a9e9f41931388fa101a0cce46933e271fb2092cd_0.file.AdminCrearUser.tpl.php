<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-14 04:17:56
  from 'C:\xampp\htdocs\FRAMEWORK\FrameworkMVC\templates\AdminCrearUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0d15d4491544_81279839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e9f41931388fa101a0cce46933e271fb2092cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FRAMEWORK\\FrameworkMVC\\templates\\AdminCrearUser.tpl',
      1 => 1594693074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d15d4491544_81279839 (Smarty_Internal_Template $_smarty_tpl) {
?></br>
        <div align="center" id="ENCABEZADO">

   
        <h2>CREAR USUARIO</h2>
          </div>
          <br>
           <div class="col">
        <form method="post" action="" id="COLOR"> 
    <div class="form-group">
        <label for="usuario">Usuario</label>
        <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
        </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <small id="usuario" class="form-text text-muted">Ingrese password de usuario</small>
                    </div>
                    <div class="form-group">
                    <label for="tipo">Tipo Trabajador</label>
                    <select class="form-control" id="tipo" name="tipo">
                        <option value="Trabajador">Trabajador</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                    </div><br/>
                     <br/>
					<div align="center">
                      <button type="submit" class="btn btn-primary" >Guardar Usuario</button>
					</div>
                </form>
           
        </div>
        </div>
    </div>

<?php }
}
