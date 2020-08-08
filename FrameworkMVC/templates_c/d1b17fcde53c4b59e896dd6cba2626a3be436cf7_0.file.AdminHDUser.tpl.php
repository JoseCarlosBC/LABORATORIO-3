<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-08 08:32:07
  from 'C:\xampp\htdocs\FrameworkMVC\templates\AdminHDUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0568677facf7_65002014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b17fcde53c4b59e896dd6cba2626a3be436cf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FrameworkMVC\\templates\\AdminHDUser.tpl',
      1 => 1594189922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0568677facf7_65002014 (Smarty_Internal_Template $_smarty_tpl) {
?> <div align="center">

   
        <h1>HABILITAR/DESHABILITAR USUARIO</h1>
          </div>
          <br>
           <div class="col">
        <form method="post" action=""> 
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
      </div><br/>

      <div class="form-group">
                    <label for="tipo">Habilitar/Deshabilitar Usuario</label>
                    <select class="form-control" id="tipo" name="tipo">
                        <option value="1">Habilitar</option>
                        <option value="2">Deshabilitar</option>
                    </select>
                    </div><br/>
     <button type="submit" class="btn btn-primary" >Guardar Cambios</button>
                </form>
                </div
                </div>
                <?php }
}
