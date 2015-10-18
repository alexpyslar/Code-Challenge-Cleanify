<?php /* Smarty version 3.1.24, created on 2015-10-18 02:29:34
         compiled from "app/views/checkbox.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:284365622d9deb4f717_99917596%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e96abef37e50f565d2a6aa6cd24f553a3e8ad85' => 
    array (
      0 => 'app/views/checkbox.tpl',
      1 => 1445124573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284365622d9deb4f717_99917596',
  'variables' => 
  array (
    'row' => 0,
    'validation_return' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5622d9debdffb0_25316145',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5622d9debdffb0_25316145')) {
function content_5622d9debdffb0_25316145 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '284365622d9deb4f717_99917596';
?>
<label for="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_name'];?>
">
    <?php echo $_smarty_tpl->tpl_vars['row']->value['field_label'];
if ($_smarty_tpl->tpl_vars['row']->value['required'] == 1) {?><span> *</span><?php }?>
    <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_name'];?>
" <?php echo $_smarty_tpl->tpl_vars['row']->value['required'] == 1 ? 'required' : '';?>

            checked="<?php echo $_smarty_tpl->tpl_vars['validation_return']->value[$_smarty_tpl->tpl_vars['row']->value['field_name']];?>
" />
</label><?php }
}
?>