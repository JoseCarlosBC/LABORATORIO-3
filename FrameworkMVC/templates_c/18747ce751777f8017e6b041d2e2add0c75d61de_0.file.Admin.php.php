<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-06 03:35:19
  from 'C:\xampp\htdocs\LABO 3\FrameworkMVC\templates\Admin.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2b5e575022b4_85596439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18747ce751777f8017e6b041d2e2add0c75d61de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LABO 3\\FrameworkMVC\\templates\\Admin.php',
      1 => 1596677629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f2b5e575022b4_85596439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</br>
<div align="center" id="ENCABEZADO">
        <h1>BIENVENIDO</h1>
</div>
<div align="right">
	<button type="button" class="btn btn-light">
	  <a href="?controller=Operaciones&action=VerCanciones">CANCIONES</a>
	</button> 
</div>
</br>
        <div align="center" id="ENCABEZADO">

   
        <h2>AGREGAR CANCION</h2>
          </div>
           <div class="col">
        <form method="post" action="?controller=Operaciones&action=Framework" id="COLOR"> 
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
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
