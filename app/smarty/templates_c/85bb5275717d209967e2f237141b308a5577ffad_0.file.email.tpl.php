<?php /* Smarty version 3.1.24, created on 2015-10-18 01:55:53
         compiled from "app/views/email.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:186175622d1f990af67_16230125%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85bb5275717d209967e2f237141b308a5577ffad' => 
    array (
      0 => 'app/views/email.tpl',
      1 => 1445122551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186175622d1f990af67_16230125',
  'variables' => 
  array (
    'row' => 0,
    'validation' => 0,
    'validation_return' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5622d1f9993b02_34406611',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5622d1f9993b02_34406611')) {
function content_5622d1f9993b02_34406611 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '186175622d1f990af67_16230125';
?>
<label for="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_name'];?>
">
    <?php echo $_smarty_tpl->tpl_vars['row']->value['field_label'];
if ($_smarty_tpl->tpl_vars['row']->value['required'] == 1) {?><span> *</span><?php }?>
    <input type="email" name="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['row']->value['default_value'];?>
"
           width="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_size'];?>
" <?php echo $_smarty_tpl->tpl_vars['row']->value['required'] == 1 ? 'required' : '';?>

            <?php if (isset($_smarty_tpl->tpl_vars['validation']->value[$_smarty_tpl->tpl_vars['row']->value['field_name']])) {?>style="color: red;"<?php }?>
           value="<?php echo $_smarty_tpl->tpl_vars['validation_return']->value[$_smarty_tpl->tpl_vars['row']->value['field_name']];?>
"/>
</label>
<?php }
}
?>