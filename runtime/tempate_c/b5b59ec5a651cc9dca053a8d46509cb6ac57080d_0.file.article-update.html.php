<?php
/* Smarty version 3.1.30, created on 2017-11-09 13:44:47
  from "E:\www\ueepress2\app\admin\view\article-update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03eb4f760499_03451174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5b59ec5a651cc9dca053a8d46509cb6ac57080d' => 
    array (
      0 => 'E:\\www\\ueepress2\\app\\admin\\view\\article-update.html',
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
function content_5a03eb4f760499_03451174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/_meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title>修改文章 - 内容管理 - UEECMS</title>
</head>
<body>
<article class="page-container">
<form class="form form-horizontal" id="form-article-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
" name="id">
			<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
" name="title">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">简略标题：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['sub_title'];?>
" name="sub_title">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
			<select name="cate_id" class="select">
				<option value="0">全部分类</option>
				<?php echo $_smarty_tpl->tpl_vars['menustr']->value;?>

			</select>
			</span>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">关键词：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['keyword'];?>
" name="keyword">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">文章摘要：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<textarea name="description" cols="" rows="" class="textarea"  dragonfly="true" ><?php echo $_smarty_tpl->tpl_vars['res']->value['description'];?>
</textarea>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">文章作者：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['author'];?>
" name="author">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">文章来源：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['sources'];?>
" name="sources">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">文章置顶：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="check-box">
				<?php if ($_smarty_tpl->tpl_vars['res']->value['stick'] == "1") {?>
				<input type="checkbox"name="stick" checked>
				<?php } else { ?>
				<input type="checkbox"name="stick">
				<?php }?>
				<label for="checkbox-pinglun">&nbsp;</label>
			</div>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">允许评论：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="check-box">
				<?php if ($_smarty_tpl->tpl_vars['res']->value['comment'] == "1") {?>
				<input type="checkbox"name="comment" checked>
				<?php } else { ?>
				<input type="checkbox"name="comment">
				<?php }?>
				<label for="checkbox-pinglun">&nbsp;</label>
			</div>
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
				<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value['image']['img_url'];?>
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
		<label class="form-label col-xs-4 col-sm-2">文章内容：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<?php echo '<script'; ?>
 name="content" id="editor" type="text/plain" style="width:100%;height:400px;"><?php echo $_smarty_tpl->tpl_vars['res']->value['content'];
echo '</script'; ?>
>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">阅读次数：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['read'];?>
" name="read">
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
			<input onclick="" class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
</form>
</article>

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
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/huploadify/jquery.Huploadify.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/admin/lib/ueditor/1.4.3/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
//删除图片
$(document).ready(function () {
	$("#uploadimg span").click(function () {
		$("#img_id").val("");
		$("#uploadimg").hide();
	});
});

$(function(){
	//表单验证
	$("#form-article-add").validate({
		rules:{
			title:{
				required:true,
			}
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				url:"<?php echo url(array('path'=>'api/article/update'),$_smarty_tpl);?>
",
				type:"POST",
				success:function(res){
					layer.msg('更新成功!',{icon:1,time:1000});
					setTimeout("self.location='<?php echo url(array('path'=>'admin/article/getList'),$_smarty_tpl);?>
';",1000);
				},
				error:function(res){
					layer.msg('更新失败!',{icon:0,time:1000});
				}
			});
		}
	});

	var ue = UE.getEditor('editor');
});
<?php echo '</script'; ?>
>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html><?php }
}
