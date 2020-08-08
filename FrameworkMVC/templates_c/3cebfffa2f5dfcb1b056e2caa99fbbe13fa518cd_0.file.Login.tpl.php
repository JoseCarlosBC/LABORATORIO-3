<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-13 22:51:15
  from 'C:\xampp\htdocs\FrameworkMVC\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0cc9434dbd85_00276837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cebfffa2f5dfcb1b056e2caa99fbbe13fa518cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FrameworkMVC\\templates\\Login.tpl',
      1 => 1594673470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0cc9434dbd85_00276837 (Smarty_Internal_Template $_smarty_tpl) {
?><br/>
<br/>
    <div align="center">
        <h1>LOGIN</h1>
    </div>
    <br />
    <br />
    <div class="container-fluid" alert-danger>
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
                    <br/>
                     <br/>
                    <button type="submit" class="btn btn-primary" >Ingresar</button>
                </form>
            </div>
        </div>
    </div>

<?php }
}
