<?php
/* Smarty version 3.1.30, created on 2017-11-16 08:51:17
  from "C:\Program Files (x86)\UwAmp\www\Projet_PHP\PartageRecette\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0d5185aa6684_42168894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dffefad6681daf71a5d9f06a6c82592712bea635' => 
    array (
      0 => 'C:\\Program Files (x86)\\UwAmp\\www\\Projet_PHP\\PartageRecette\\application\\views\\layout.tpl',
      1 => 1510822050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./layout/layout_entete.inc.tpl' => 1,
  ),
),false)) {
function content_5a0d5185aa6684_42168894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>

	<header>
		<?php $_smarty_tpl->_subTemplateRender("file:./layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<header>

	<body>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177005a0d5185aa3f11_24590981', 'profil');
?>

	</body>

</html><?php }
/* {block 'profil'} */
class Block_177005a0d5185aa3f11_24590981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'profil'} */
}
