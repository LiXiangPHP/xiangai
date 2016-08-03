<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<!-- Title and other stuffs -->
		<title></title>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="">
		<link href="/0708/Public/Admin/style/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="/0708/Public/Admin/style/font-awesome.css">
		<link href="/0708/Public/Admin/style/style.css" rel="stylesheet">
		<link rel="shortcut icon" href="/0708/Public/Admin/img/favicon/favicon.png">
	</head>

	<body>

		<!-- Header starts -->
		<header>
			<div class="container">
				<div class="row">

					<!-- Logo section -->
					<div class="col-md-4">
						<!-- Logo. -->
						<div class="logo">
							<h1><a href="#">Q管理平台<span class="bold"></span></a></h1>
							<p class="meta">Q 是一种精神...</p>
						</div>
						<!-- Logo ends -->
					</div>
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown pull-right">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-user"></i> <?php echo ($_SESSION['admin']['admin_name']); ?> <b class="caret"></b>
							</a>

							<!-- Dropdown menu -->
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> 资料</a>
								</li>
								<li><a href="#"><i class="icon-cogs"></i> 设置</a>
								</li>
                            <li><a href="<?php echo U('login/logout');?>"><i class="icon-off"></i> 退出</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</header>

		<!-- Header ends -->

		<!-- Main content starts -->

		<div class="content">

			<!-- Sidebar -->
			<div class="sidebar">
				<div class="sidebar-dropdown"><a href="#">导航</a>
				</div>
				<ul id="nav" style="">
					
                    <li class="has_sub"><a href="javascript:void(0)" class="<?php if(strtolower(CONTROLLER_NAME)=='goods'): ?>open<?php endif; ?>"><i class="icon-list-alt"></i> 商品管理 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
						<ul>
                            <li><a href="<?php echo U('goods/lists');?>">商品列表</a></li>
							<li><a href="">添加商品</a></li>
							<li><a href="">商品回收站</a></li>
							<li><a href="<?php echo U('category/lists');?>">商品分类</a></li>
						</ul>
					</li>
					<li class="has_sub"><a href="#"><i class="icon-bar-chart"></i>订单管理<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
						<ul>
							
							<li><a href="">订单列表</a></li>
							<li><a href="">已完成订单</a></li>
						</ul>
					</li>
					<li class="has_sub"><a href="#"><i class="icon-tasks"></i>文章管理<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
						<ul>
							<li><a href="protal.html">文章列表</a></li>
							<li><a href="">添加文章</a></li>
						</ul>
					</li>
					<li class="has_sub"><a href="#"><i class="icon-magic"></i>用户管理<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
						<ul>
							<li><a href="<?php echo U('group/lists');?>">管理员列表</a></li>
							<li><a href="">权限管理</a></li>
							<li><a href="">会员列表</a></li>
							<li><a href="">添加会员</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- Sidebar ends -->
			<!-- Main bar -->
            
	<div class="mainbar">

				<!-- Page heading -->
				<div class="page-head">
					<h2 class="pull-left"><i class="icon-calendar"></i>权限管理</h2>
					<!-- Breadcrumb -->
					<div class="bread-crumb pull-right">
						<a href=""><i class="icon-calendar"></i>权限管理</a>
						<!-- Divider -->
						<span class="divider">/</span>
						<a href="javascript:void(0)" class="bread-current">权限管理</a>
					</div>
					<div class="clearfix"></div>

				</div>
				<!-- Page heading ends -->

				<!-- Matter -->
				<div class="matter">
					<div class="container">
						<!-- Table -->
						<div class="row">
							<div class="col-md-12">
								<div class="widget">
									<div class="widget-head">								
										<div class="pull-left">
											
										</div>
										<div class="pull-right">
											<form class="navbar-form navbar-right" role="search">											
												<div class="form-group">
													<button onclick="saveRules()" type="button" class="btn btn-primary" style="width: 80px;"><i class="icon-plus"></i>&nbsp;保存</button>
												</div>
											</form>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="widget-content">
										<input type="hidden" name="id" value="<?php echo ($group["id"]); ?>">
										<?php if(is_array($ruleList)): $i = 0; $__LIST__ = $ruleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rule1): $mod = ($i % 2 );++$i;?><div class="panel panel-primary">
											  <div class="panel-heading">
											  	<label class="checkbox"><input type="checkbox" name="rule[]" value="<?php echo ($rule1['id']); ?>"><?php echo ($rule1['title']); ?></label>
											  </div>
											  <?php if(is_array($rule1["children"])): $i = 0; $__LIST__ = $rule1["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rule2): $mod = ($i % 2 );++$i;?><div class="panel-body">
											    	<label class="checkbox" style="margin-left:20px;"><input type="checkbox" name="rule[]" value="<?php echo ($rule2['id']); ?>"><?php echo ($rule2['title']); ?></label>
											    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<?php if(is_array($rule2["children"])): $i = 0; $__LIST__ = $rule2["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rule3): $mod = ($i % 2 );++$i;?><label class="checkbox-inline"><input type="checkbox" <?php if(in_array(($rule3["id"]), is_array($group['rules'])?$group['rules']:explode(',',$group['rules']))): ?>checked="checked"<?php endif; ?> name="rule[]" value="<?php echo ($rule3['id']); ?>"><?php echo ($rule3['title']); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
											  </div><?php endforeach; endif; else: echo "" ;endif; ?>
											</div><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Matter ends -->
			</div>


			<!-- Mainbar ends -->
			<div class="clearfix"></div>
		</div>
		<!-- Content ends -->
		<span class="totop" style="display: none;"><a href="#"><i class="icon-chevron-up"></i></a></span>
		<script src="/0708/Public/Admin/js/jquery.js"></script>	
		<script src="/0708/Public/Admin/js/bootstrap.js"></script>	
		<script src="/0708/Public/Admin/js/custom.js"></script>
        
<script type="text/javascript">
$(function() {
	// 为所有类别为 checkbox的复选框绑定单击事件
	$('div.panel :checkbox').bind('click', function() {
		var $div=$(this).closest('div'); // div.panel-heading
		var $label=$(this).parent(); // 父元素label
		var checked=$(this).prop('checked');
		if($div.is('.panel-heading')) { // 确定一级节点
			$div.nextAll().find(':checkbox').prop('checked', checked);
		} else {
			if($label.is('.checkbox')) { // 确定二级节点
				$label.nextAll('label').find(':checkbox').prop('checked', checked);
			}
		}
	});
});
function saveRules() { 
	var data=$('div.widget-content :input').serialize();
	$.post('<?php echo U("accessDoit");?>', data, function(data) {
		if(data.status) {
			location.href=data.url;
		} else {
			alert(data.info);
		}
	});
}
</script>

        </body></html>