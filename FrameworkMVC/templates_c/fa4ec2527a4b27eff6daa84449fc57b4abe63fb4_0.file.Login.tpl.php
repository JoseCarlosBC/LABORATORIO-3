<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-06 00:14:17
  from 'C:\xampp\htdocs\LABO 3\FrameworkMVC\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2b2f392faae0_69067522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa4ec2527a4b27eff6daa84449fc57b4abe63fb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LABO 3\\FrameworkMVC\\templates\\Login.tpl',
      1 => 1596665565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f2b2f392faae0_69067522 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <label for="usuario">Usuario</label>
                        <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
                        <small id="usuario" class="form-text text-muted">Ingrese usuario</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Clave</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <small id="usuario" class="form-text text-muted">Ingrese clave</small>
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
