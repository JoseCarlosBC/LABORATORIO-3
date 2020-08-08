<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-06 18:06:47
  from 'C:\xampp\htdocs\LABO 3\FrameworkMVC\templates\AdminHDUser.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2c2a972ac3e0_63395802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f58a1fdb3697ebb3bf5b7821696c5fc9248f108' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LABO 3\\FrameworkMVC\\templates\\AdminHDUser.php',
      1 => 1596730003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f2c2a972ac3e0_63395802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <div align="center" id="VENTAS">
	<h1>CANCIONES</h1>
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
		     <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">CANCION</th>
      <th scope="col">ARTISTA</th>
      <th scope="col">GENERO</th>
      <th scope="col">ALBUM</th>
	  <th scope="col">DESCRIPCION</th>
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
