<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-14 02:59:36
  from 'C:\xampp\htdocs\FRAMEWORK\FrameworkMVC\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0d0378d114a0_74946653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f2e6be52de32aaa78a4f632a4db1970249f96db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FRAMEWORK\\FrameworkMVC\\templates\\Default.tpl',
      1 => 1594194269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Admin.tpl' => 1,
    'file:Trab.tpl' => 1,
    'file:Login.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f0d0378d114a0_74946653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'Administrador') {?>
     <?php $_smarty_tpl->_subTemplateRender('file:Admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } else { ?>
       <?php $_smarty_tpl->_subTemplateRender('file:Trab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <?php }?>
    <?php } else { ?>
      <?php $_smarty_tpl->_subTemplateRender('file:Login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
