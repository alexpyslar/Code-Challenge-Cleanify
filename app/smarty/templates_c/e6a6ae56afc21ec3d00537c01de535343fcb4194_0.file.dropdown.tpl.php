<?php /* Smarty version 3.1.24, created on 2015-10-18 01:56:29
         compiled from "app/views/dropdown.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:104275622d21d872d69_01662609%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6a6ae56afc21ec3d00537c01de535343fcb4194' => 
    array (
      0 => 'app/views/dropdown.tpl',
      1 => 1445122587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104275622d21d872d69_01662609',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5622d21d8efd85_45307894',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5622d21d8efd85_45307894')) {
function content_5622d21d8efd85_45307894 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'E:/OpenServer/domains/test.project.dev/app/smarty/plugins/function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '104275622d21d872d69_01662609';
?>
<label for="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_name'];?>
">
    <?php echo $_smarty_tpl->tpl_vars['row']->value['field_label'];
if ($_smarty_tpl->tpl_vars['row']->value['required'] == 1) {?><span> *</span><?php }?>
    <?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['row']->value['field_name'],'options'=>explode(',',$_smarty_tpl->tpl_vars['row']->value['default_value'])),$_smarty_tpl);?>

</label><?php }
}
?>