<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-14 04:17:06
  from 'C:\xampp\htdocs\FRAMEWORK\FrameworkMVC\templates\AdminHDUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0d15a279bac4_35504163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6cd6df84333487fdfa969f34e98e2c7a30f31d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FRAMEWORK\\FrameworkMVC\\templates\\AdminHDUser.tpl',
      1 => 1594693020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d15a279bac4_35504163 (Smarty_Internal_Template $_smarty_tpl) {
?> </br>
 <div align="center" id="ENCABEZADO">

   
        <h2>HABILITAR/DESHABILITAR USUARIO</h2>
          </div>
           <div class="col">
        <form method="post" action="" id="COLOR"> 
    <div class="form-group " >
        <label for="usuario">Usuario</label>
        <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
        </div>

   <div class="form-group">
       <label for="tipo">Tipo Trabajador</label>
        <select class="form-control" id="tipo" name="tipo">
     <option value="Trabajador">Trabajador</option>
     <option value="Administrador">Administrador</option>
      </select>
      </div>

      <div class="form-group">
                    <label for="tipo">Habilitar/Deshabilitar Usuario</label>
                    <select class="form-control" id="tipo" name="tipo">
                        <option value="1">Habilitar</option>
                        <option value="2">Deshabilitar</option>
                    </select>
                    </div><br/>
     <div align="center">
       <button type="submit" class="btn btn-primary" >Guardar Cambios</button>
	 </div>
                </form>
                </div
                </div>
                <?php }
}
