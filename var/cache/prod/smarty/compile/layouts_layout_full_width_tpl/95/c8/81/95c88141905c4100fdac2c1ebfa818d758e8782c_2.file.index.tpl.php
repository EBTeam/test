<?php
/* Smarty version 3.1.33, created on 2018-12-11 15:05:52
  from '/home/www/clients/client1/web152/web/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0fc4404a6124_75793278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95c88141905c4100fdac2c1ebfa818d758e8782c' => 
    array (
      0 => '/home/www/clients/client1/web152/web/themes/classic/templates/index.tpl',
      1 => 1541535862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0fc4404a6124_75793278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6126442415c0fc4404a4774_70544560', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20389690975c0fc4404a4b77_47888214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_5824911415c0fc4404a5459_00447379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11309360005c0fc4404a50f6_44764426 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5824911415c0fc4404a5459_00447379', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6126442415c0fc4404a4774_70544560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_6126442415c0fc4404a4774_70544560',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20389690975c0fc4404a4b77_47888214',
  ),
  'page_content' => 
  array (
    0 => 'Block_11309360005c0fc4404a50f6_44764426',
  ),
  'hook_home' => 
  array (
    0 => 'Block_5824911415c0fc4404a5459_00447379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20389690975c0fc4404a4b77_47888214', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11309360005c0fc4404a50f6_44764426', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
