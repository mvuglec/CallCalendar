<?php /* Smarty version Smarty-3.1.8, created on 2012-09-26 11:31:40
         compiled from "/www/htdocs/mrtc/testIDT/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17888414045062cb7c5bb120-79343512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0946c94b77b666c29d8608844b2e63cdd3c357e5' => 
    array (
      0 => '/www/htdocs/mrtc/testIDT/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1348647603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17888414045062cb7c5bb120-79343512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5062cb7c5edc55_06829456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5062cb7c5edc55_06829456')) {function content_5062cb7c5edc55_06829456($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/www/htdocs/mrtc/testIDT/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	</div>

	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="get">
						<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
						<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />
					</form>
				</li>
			<?php }?>
		</ul>
		<div class="sf-right">&nbsp;</div>

	<!--/ Menu -->
<?php }?><?php }} ?>