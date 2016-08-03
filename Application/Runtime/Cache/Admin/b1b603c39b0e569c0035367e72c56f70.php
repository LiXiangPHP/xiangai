<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<!-- Title and other stuffs -->
		<title></title>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="">
		<link href="/0714/Public/Admin/style/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="/0714/Public/Admin/style/font-awesome.css">
		<link href="/0714/Public/Admin/style/style.css" rel="stylesheet">
		<link rel="shortcut icon" href="/0714/Public/Admin/img/favicon/favicon.png">
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
							<h1><a href="#">相爱网管理平台<span class="bold"></span></a></h1>
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
					<li class="has_sub"><a href="#"><i class="icon-magic"></i>用户管理<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
						<ul>
							<li><a href="fenxi.html">管理员列表</a></li>
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
					<h2 class="pull-left"><i class="icon-calendar"></i>商品分类</h2>
					<!-- Breadcrumb -->
					<div class="bread-crumb pull-right">
						<a href=""><i class="icon-calendar"></i>商品分类</a>
						<!-- Divider -->
						<span class="divider">/</span>
						<a href="<?php echo U('category/insert');?>" class="bread-current">添加分类</a>
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
													<button onclick="window.open('<?php echo U("insert");?>')" type="button" class="btn btn-primary" style="width: 80px;"><i class="icon-plus"></i>&nbsp;添加</button>
												</div>
											</form>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="widget-content">
										<table class="table table-striped table-bordered table-hover">
											<thead>
												<tr>												
													<th>序号</th>
													<th>分类名称</th>
													<th>分类层级</th>
													<th>排序</th>
													<th>状态</th>
													<th>操作</th>
												</tr>
											</thead>
											<tbody>
                                                <?php if(is_array($cateList)): $i = 0; $__LIST__ = $cateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><tr cid="<?php echo ($cate['cate_id']); ?>" pid="<?php echo ($cate['parent_id']); ?>" path="<?php echo ($cate['path']); ?>" style='display:<?php if($cate['path'] > 1): ?>none;<?php endif; ?>'>	
                                                    <td><?php echo ($cate['cate_id']); ?></td>					
													<td class="text-left"><?php echo str_pad('',6*($cate['path']-1)*4, '&nbsp;'); echo ($cate['cate_name']); ?></td>
													<td><?php echo ($cate['path']); ?></td>
                                                    <td><?php echo ($cate['sort_order']); ?></td>
                                                    <td><?php echo ($cate['is_delete']); ?></td>
													<td>								
														<a class="btn btn-xs btn-warning" href="<?php echo U('update?id='.$cate['cate_id']);?>"><i class="icon-pencil"></i>&nbsp;编辑</a>
														<a class="btn btn-xs btn-danger" href="<?php echo U('delete?id='.$cate['cate_id']);?>"><i class="icon-remove"></i>&nbsp;删除</a>										
													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											</tbody>
										</table>
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
		<script src="/0714/Public/Admin/js/jquery.js"></script>	
		<script src="/0714/Public/Admin/js/bootstrap.js"></script>	
		<script src="/0714/Public/Admin/js/custom.js"></script>
        
<script type="text/javascript">
	/*
	$(function() {
		$('tr[cid]').bind('click', function() {
			// 获取当前分类ID
			// var cid = $(this).attr('cid');
			// var pid = $(this).attr('pid');
			// if($('tr[pid='+cid+']').is(':hidden')) {
			// 	// 显示的时候, 是让所有的子分类显示
			// 	$('tr[pid='+cid+']').css('display', 'table-row');
			// } else {
			// 	// 隐藏的时候, 是让所有的后代元素都隐藏
			// 	// $('tr[pid='+cid+']').length>0 一定含有子元素
			// 	// $(this).nextUntil('tr[pid='+pid+']').length>0  当前元素后面有兄弟节点
			// 	// 获取当前元素后是否含有兄弟节点
			// 	// console.log($(this).nextAll('tr[pid='+pid+']').length); // 0
			// 	if($('tr[pid='+cid+']').length>0 && $(this).nextUntil('tr[pid='+pid+']').length>0) {
			// 		if($(this).nextAll('tr[pid='+pid+']').length==0) {
			// 			$('tr[pid='+cid+']').css('display', 'none');
			// 		} else {
			// 			$(this).nextUntil('tr[pid='+pid+']').css('display', 'none');
			// 		}
			// 	}
			// }
			toHidden($(this));
		});
	})

	// 显示 -> 子元素显示
	// 隐藏 -> 后代元素隐藏
	function toHidden($selector, type) {
		// tr cid pid
		var cid = $selector.attr('cid');
		var pid = $selector.attr('pid');
		// 遍历所有的子元素
		$('tr[pid='+cid+']').each(function() {
			// 判断当前元素是显示的还是隐藏的
			if($(this).is(':hidden') && !type) {
				$(this).css('display', 'table-row');
			} else {
				toHidden($(this), true);
				$(this).css('display', 'none');
			}
		});
	}*/

	$('tr[cid]').bind('click', function(e, type) {
		var cid = $(this).attr('cid');
		var pid = $(this).attr('pid');
		// 遍历所有的子元素
		$('tr[pid='+cid+']').each(function() {
			// 判断当前元素是显示的还是隐藏的
			if($(this).is(':hidden') && !type) {
				$(this).css('display', 'table-row');
			} else {
				// 触发当前tr的点击事件
				$(this).trigger('click', true);
				$(this).css('display', 'none');
			}
		});
	});
</script>

        </body></html>