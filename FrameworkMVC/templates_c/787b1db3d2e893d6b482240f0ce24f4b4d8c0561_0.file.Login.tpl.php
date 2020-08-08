<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-08 17:01:33
  from 'C:\XMPP\htdocs\proyecto\LABORATORIO-3\FrameworkMVC\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2ebe4d9f0032_11811095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '787b1db3d2e893d6b482240f0ce24f4b4d8c0561' => 
    array (
      0 => 'C:\\XMPP\\htdocs\\proyecto\\LABORATORIO-3\\FrameworkMVC\\templates\\Login.tpl',
      1 => 1596898889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f2ebe4d9f0032_11811095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</br></br></br>
	<div align="center" id="ENCABEZADO">
        <h1>LOGIN</h1>
    </div>
</br>
    <div class="container-fluid" id="CONTENIDO">
        <div class="row justify-content-center" >
            <div class="col-4 " >
                <form method="post" action="?controller=User&action=ValidarUsuario"> 
                    <div class="form-group " >
                        <label for="usuario">nombre</label>
                        <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
                        <small id="usuario" class="form-text text-muted">Ingrese su usuario</small>
                    </div>
                    <div class="form-group">
                        <label for="password">contraseña</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <small id="usuario" class="form-text text-muted">Ingrese su password</small>
                    </div>
                    <select class="form-control" id="tipo" name="tipo">
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
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
