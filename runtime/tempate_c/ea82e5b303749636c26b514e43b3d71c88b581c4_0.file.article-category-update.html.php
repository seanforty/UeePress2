<?php
/* Smarty version 3.1.30, created on 2017-11-09 15:10:16
  from "E:\www\ueepress2\app\admin\view\article-category-update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03ff58aefe80_81282857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea82e5b303749636c26b514e43b3d71c88b581c4' => 
    array (
      0 => 'E:\\www\\ueepress2\\app\\admin\\view\\article-category-update.html',
      1 => 1510189716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/_meta.html' => 1,
    'file:public/_footer.html' => 1,
  ),
),false)) {
function content_5a03ff58aefe80_81282857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/_meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title>编辑分类 - 内容管理 - UEECMS</title>
</head>
<body>
<div class="page-container">
	<form class="form form-horizontal" id="form-category-add" onsubmit="return false">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">
				<span class="c-red">*</span>
				分类名称：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
" id="id" name="id">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">
				<span class="c-red">*</span>
				父级分类：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<select class="select" name="parent_id" size="1">
					<option value="0" selected>--选择父级分类</option>
					<?php echo $_smarty_tpl->tpl_vars['dropdownStr']->value;?>

				</select>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">
				<span class="c-red">*</span>
				分类排序：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['listorder'];?>
" id="listorder" name="listorder">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">
				缩略图：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<div id="upload"></div><div id="deleteupload"></div>
				<input type="hidden" name="img_id"  id="img_id" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['img_id'];?>
">
				<?php if (isset($_smarty_tpl->tpl_vars['res']->value['image'])) {?>
				<div style="vertical-align: bottom;"  id="uploadimg">
					<img src="/<?php echo $_smarty_tpl->tpl_vars['res']->value['image']['img_url'];?>
" height="200" >
					<span><i class="Hui-iconfont">&#xe6a6;</i></span>
				</div>
				<?php } else { ?>
				<div style="display:none;vertical-align: bottom;"  id="uploadimg">
					<img src="" height="200" >
					<span><i class="Hui-iconfont">&#xe6a6;</i></span>
				</div>
				<?php }?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">备注：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<textarea name="description" cols="" rows="" class="textarea" placeholder="为分类添加备注，300字以内。"><?php echo $_smarty_tpl->tpl_vars['res']->value['description'];?>
</textarea>
			</div>
		</div>
		<div class="row cl">
			<div class="col-9 col-offset-2">
				<input onclick="" class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--请在下方写此页面业务相关的脚本-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/admin/lib/jquery.validation/1.14.0/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/admin/lib/jquery.validation/1.14.0/validate-methods.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/admin/lib/jquery.validation/1.14.0/messages_zh.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	$("#form-category-add").validate({
		rules:{
		    title:{
                required:true
			}
		},
        onkeyup:false,
        focusCleanup:true,
        success:"valid",
		submitHandler:function (form) {
            $(form).ajaxSubmit({
                url:"<?php echo url(array('path'=>'api/category/update'),$_smarty_tpl);?>
",
				type:"POST",
				success:function(res){
                    layer.msg('更新成功!',{icon:1,time:1000});
                    setTimeout('parent.location.reload()',1000);
				},
				error:function(res){
                    layer.msg('更新失败!',{icon:0,time:1000});
                    setTimeout('parent.location.reload()',1000);
				}
			});
        }
    });

});

//删除图片
$(document).ready(function () {
    $("#uploadimg span").click(function () {
        $("#img_id").val("");
        $("#uploadimg").hide();
    });
});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
