<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-08 16:35:48
  from 'C:\XMPP\htdocs\proyecto\LABORATORIO-3\FrameworkMVC\templates\AdminHDUser.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2eb844c41bf0_39172275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4bce0a22720d6d3b5766a4476bbe1f0cabbb577' => 
    array (
      0 => 'C:\\XMPP\\htdocs\\proyecto\\LABORATORIO-3\\FrameworkMVC\\templates\\AdminHDUser.php',
      1 => 1596897325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f2eb844c41bf0_39172275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <div align="center" id="VENTAS">
	<h1>Artistas de HAMLET</h1>
 </div>
		<div>
		   <div align="right">
			   <button type="button" class="btn btn-light">
				   <a href="?controller=Operaciones&action=VentanaLogin">INICIAR SESION</a>
			   </button> 
			   </br></br>
		   </div>
		   <div align="center" id="CONTENIDO">
		     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>
		     <table class="table">
  <thead class="thead-dark">
  <thead>
    <tr>
      <th scope="col">Canción</th>
      <th scope="col">Artista</th>
      <th scope="col">Genero</th>
      <th scope="col">Album</th>
	  <th scope="col">pequeña descripcion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['n']->value['cancion'];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['n']->value['artista'];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['n']->value['genero'];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['n']->value['album'];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['n']->value['info'];?>
</td>
    </tr> 
  </tbody>
</table>
		   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		   </div>
		</div>      
    
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
