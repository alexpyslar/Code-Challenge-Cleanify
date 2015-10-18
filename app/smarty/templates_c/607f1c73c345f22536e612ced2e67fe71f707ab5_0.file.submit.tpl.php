<?php /* Smarty version 3.1.24, created on 2015-10-17 22:12:20
         compiled from "app/views/submit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2659556229d94ea7d79_96940741%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '607f1c73c345f22536e612ced2e67fe71f707ab5' => 
    array (
      0 => 'app/views/submit.tpl',
      1 => 1445109110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2659556229d94ea7d79_96940741',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56229d95107957_97805346',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56229d95107957_97805346')) {
function content_56229d95107957_97805346 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2659556229d94ea7d79_96940741';
?>
<div class="col-submit">
    <button class="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_classes'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['default_value'];?>
</button>
</div><?php }
}
?>