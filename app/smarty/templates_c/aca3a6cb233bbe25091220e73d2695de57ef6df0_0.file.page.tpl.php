<?php /* Smarty version 3.1.24, created on 2015-10-16 12:00:54
         compiled from "app/layouts/page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:229525620bcc692afd3_81846929%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca3a6cb233bbe25091220e73d2695de57ef6df0' => 
    array (
      0 => 'app/layouts/page.tpl',
      1 => 1444939010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229525620bcc692afd3_81846929',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5620bcc6932cd1_72160683',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5620bcc6932cd1_72160683')) {
function content_5620bcc6932cd1_72160683 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '229525620bcc692afd3_81846929';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="Alex Pyslar (Svitla Systems inc.)">
    <title>Test task</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/media.css" type="text/css" media="screen" />
    <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="container">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
</body>
</html><?php }
}
?>