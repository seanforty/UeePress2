<?php
/* Smarty version 3.1.30, created on 2017-11-09 10:02:57
  from "E:\www\ueepress\app\admin\view\link-list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03b751c16421_73589326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '587aea9a2d955c879a6aa5e81205c2e78794c52c' => 
    array (
      0 => 'E:\\www\\ueepress\\app\\admin\\view\\link-list.html',
      1 => 1510192973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/_meta.html' => 1,
    'file:public/_footer.html' => 1,
  ),
),false)) {
function content_5a03b751c16421_73589326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/_meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title>友情链接 - 内容管理 - UEECMS</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 内容管理 <span class="c-gray en">&gt;</span> 友情链接 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a href="javascript:;" onclick="del_all('<?php echo url(array('path'=>'api/link/deleteAll'),$_smarty_tpl);?>
')" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
			<a href="javascript:;" onclick="pop_layer('添加友链','<?php echo url(array('path'=>'admin/link/add'),$_smarty_tpl);?>
','800','400')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加友链</a>
		</span>
		<span class="r"></span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th><input type="checkbox" name="" value=""></th>
					<th>ID</th>
					<th>友链标题</th>
					<th>友链网址</th>
					<th>新窗口打开</th>
					<th>新增日期</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value['data'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" name=""></td>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['val']->value['target'] == "1") {?>是<?php } else { ?>否<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['create_time'];?>
</td>
					<td class="f-14 td-manage">
						<a style="text-decoration:none" class="ml-5" onClick="pop_layer('友链编辑','<?php echo url(array('path'=>'admin/link/update','params'=>array('id'=>$_smarty_tpl->tpl_vars['val']->value['id'])),$_smarty_tpl);?>
')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
						<a style="text-decoration:none" class="ml-5" onClick="del_data(this,'<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
','<?php echo url(array('path'=>"api/link/delete"),$_smarty_tpl);?>
')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tbody>
		</table>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--请在下方写此页面业务相关的脚本-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/admin/lib/laypage/1.2/laypage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/admin/lib/kkpager/kkpager.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function () {
	//分页插件kkpager
	kkpager.generPageHtml({
		pno:'<?php echo $_smarty_tpl->tpl_vars['res']->value['pagination']['currentpage'];?>
',
		total:'<?php echo $_smarty_tpl->tpl_vars['res']->value['pagination']['totalpage'];?>
',
		totalRecords:'<?php echo $_smarty_tpl->tpl_vars['res']->value['pagination']['totalcount'];?>
',
		mode:'link',
		getLink : function(n){
			return '<?php echo url(array('path'=>"admin/article/getList",'params'=>array("page"=>"'+n")),$_smarty_tpl);?>
;
		}
	});
});
<?php echo '</script'; ?>
> 
</body>
</html><?php }
}
