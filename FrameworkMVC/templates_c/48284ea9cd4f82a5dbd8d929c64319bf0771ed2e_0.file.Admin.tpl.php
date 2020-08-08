<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-06 01:01:34
  from 'C:\xampp\htdocs\LABO 3\FrameworkMVC\templates\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2b3a4e25c600_15337350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48284ea9cd4f82a5dbd8d929c64319bf0771ed2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LABO 3\\FrameworkMVC\\templates\\Admin.tpl',
      1 => 1596668400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2b3a4e25c600_15337350 (Smarty_Internal_Template $_smarty_tpl) {
?></br>
<div align="center" id="ENCABEZADO">
        <h1>BIENVENIDO</h1>
</div>
<div align="right">
	<button type="button" class="btn btn-light">
	  <a href="?controller=Operaciones&action=VentanaHDUser">CANCIONES</a>
	</button> 
</div>
</br>
        <div align="center" id="ENCABEZADO">

   
        <h2>AGREGAR CANCION</h2>
          </div>
           <div class="col">
        <form method="post" action="" id="COLOR"> 
        <div class="form-group" action="?cancion=""">
        <label for="cancion">Cancion</label>
        <input name="cancion" type="text" class="form-control" id="cancion" aria-describedby="emailHelp">
        </div>
		<div class="form-group" action="?artista=""">
        <label for="artista">Artista</label>
        <input name="artista" type="text" class="form-control" id="artista" aria-describedby="emailHelp">
        </div>
		<div class="form-group" action="?genero=""">
        <label for="genero">Genero</label>
        <input name="genero" type="text" class="form-control" id="genero" aria-describedby="emailHelp">
        </div>
		<div class="form-group" action="?album=""">
        <label for="album">Album</label>
        <input name="album" type="text" class="form-control" id="album" aria-describedby="emailHelp">
        </div>
		<div class="form-group" action="?info=""">
        <label for="info">Descripcion</label>
        <input name="info" type="text" class="form-control" id="info" aria-describedby="emailHelp">
        </div>      
                    </div><br/>
                     
					<div align="center">
                      <button type="submit" class="btn btn-primary" >Guardar Cancion</button>
					</div>
                </form>
           
        </div>
        </div>
    </div><?php }
}
