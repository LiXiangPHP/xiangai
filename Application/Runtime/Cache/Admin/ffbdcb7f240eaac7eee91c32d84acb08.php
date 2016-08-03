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
							
							<li><a href="<?php echo U('Order/lists');?>">订单列表</a></li>
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
							<li><a href="fenxi.html">管理员列表</a></li>
							<li><a href="<?php echo U('group/lists');?>">权限管理</a></li>
							<li><a href="">会员列表</a></li>
							<li><a href="">添加会员</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- Sidebar ends -->
			<!-- Main bar -->
            
	<!-- Main bar -->
			<div class="mainbar">
				<!-- Page heading -->
				<div class="page-head">
					<h2 class="pull-left"><i class="icon-cog"></i>订单管理</h2>
					<!-- Breadcrumb -->
					<div class="bread-crumb pull-right">
						<a href="order.php"><i class="icon-cog"></i>订单管理</a>
						<!-- Divider -->
						<span class="divider">/</span>
						<a class="bread-current" href="order.php">订单管理</a>
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
											<form role="search" class="form-inline navbar-form navbar-left" action="<?php echo U('ordersearch');?>" method="post">				<div class="form-group">
											    	<input type="text" value="" placeholder="订单号" name="order_sn" class="form-control">
											  	</div>
											  	<div class="form-group">
											    	<input type="text" value="" placeholder="收货人" name="consignee" class="form-control">
											  	</div>
											  	<div class="form-group">
												  	<select name="status" class="form-control">
													  <option selected="selected" value="0">订单状态</option>
													  <option value="1">待付款</option>
													  <option value="2">待发货</option>
													  <option value="3">已完成</option>
													  <option value="4">付款中</option>
													  <option value="5">取消</option>
													  <option value="6">无效</option>
													  <option value="7">退货</option>
													</select>
												</div>
											  	<button class="btn btn-success" type="submit">搜索</button>
											  	<a href="order.php?status=8" class="btn">待确认</a>
											  	<a href="order.php?status=1" class="btn">待付款</a>
											  	<a href="order.php?status=2" class="btn">待发货</a>
											</form>
										</div>
										<div class="pull-right">
										</div>
										<div class="clearfix"></div>
									</div>
									<form onsubmit="return checkform()" method="post" action="admin.php" id="form">
									<div class="widget-content">
										<table class="table table-striped table-bordered table-hover">
											<thead>
												<tr>												
													<th><input type="checkbox" onclick="changeStatus(this)" id="checkall">订单号</th>
													<th>下单时间</th>
													<th>收货人</th>
													<th>总金额</th>
													<th>应付金额</th>
													<th>订单状态</th>
													<th>操作</th>
												</tr>
											</thead>
											<tbody>
											<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
													<td><input type="checkbox" value="<?php echo ($v['order_id']); ?>" name="order_id"><?php echo ($v['order_sn']); ?></td>
													<td class="text-left"><?=date('Y-m-d H:i:s' , $v['add_time']);?></td>
													<td class="text-left"><?php echo ($v['consignee']); ?><br><?php echo ($v['address']); ?></td>
													<td><?php echo ($v['order_amount']); ?></td>
													<td><?php echo ($v['order_amount']); ?></td>
													<td><?php echo ($v['order_status']); ?>,<?php echo ($v['pay_status']); ?>,<?php echo ($v['shipping_status']); ?></td>
													<td>								
														<a href="<?php echo U('Order/orderInfo');?>?id=<?php echo ($v['order_id']); ?>" class="btn btn-xs btn-danger">
														<i class="icon-edit"></i>&nbsp;订单详情</a>
													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>												
											</tbody>
										</table>
										<div class="widget-foot">
											
											<ul class="pagination pull-right" id="show">
											<?php echo ($show); ?>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Matter ends -->

			</div>

			<!-- Mainbar ends -->

			<!-- Mainbar ends -->
			<div class="clearfix"></div>
		</div>
		<!-- Content ends -->
		<span class="totop" style="display: none;"><a href="#"><i class="icon-chevron-up"></i></a></span>
		<script src="/0714/Public/Admin/js/jquery.js"></script>	
		<script src="/0714/Public/Admin/js/bootstrap.js"></script>	
		<script src="/0714/Public/Admin/js/custom.js"></script>
        
        </body></html>