<?php /* Smarty version Smarty-3.1.8, created on 2012-11-22 13:44:22
         compiled from "/www/htdocs/mrtc/testIDT/themes/mrtc/manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90860531950ae1e26a22546-31714534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac5463a321f5bf59bfaf32f6cc94da8b59b0fa21' => 
    array (
      0 => '/www/htdocs/mrtc/testIDT/themes/mrtc/manufacturer.tpl',
      1 => 1348647628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90860531950ae1e26a22546-31714534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50ae1e26ab8187_20264975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ae1e26ab8187_20264975')) {function content_50ae1e26ab8187_20264975($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/www/htdocs/mrtc/testIDT/tools/smarty/plugins/modifier.escape.php';
?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)){?>
	<h1><?php echo smartyTranslate(array('s'=>'List of products by manufacturer'),$_smarty_tpl);?>
&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['manufacturer']->value->name, 'htmlall', 'UTF-8');?>
</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)||!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
		<div class="description_box">
			<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
				<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->short_description;?>
</p>
				<p class="hide_desc"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>
				<a href="#" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide(); return false;"><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
</a>
			<?php }else{ ?>
				<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>
			<?php }?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
		<div class="sortPagiBar clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No products for this manufacturer.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>
<?php }} ?>