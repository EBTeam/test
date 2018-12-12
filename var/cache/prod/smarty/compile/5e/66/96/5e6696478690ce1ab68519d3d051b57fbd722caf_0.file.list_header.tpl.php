<?php
/* Smarty version 3.1.33, created on 2018-12-12 13:18:35
  from '/home/www/clients/client1/web152/web/admin047swb5gy/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c10fc9b367331_33480962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6696478690ce1ab68519d3d051b57fbd722caf' => 
    array (
      0 => '/home/www/clients/client1/web152/web/admin047swb5gy/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1541535862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c10fc9b367331_33480962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_313710115c10fc9b3663f8_31985193', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_313710115c10fc9b3663f8_31985193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_313710115c10fc9b3663f8_31985193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
