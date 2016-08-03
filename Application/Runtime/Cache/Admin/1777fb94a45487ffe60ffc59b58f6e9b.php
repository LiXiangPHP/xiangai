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
            
<div class="mainbar">
				<!-- Page heading -->
				<div class="page-head">
					<h2 class="pull-left"><i class="icon-cog"></i>管理员管理</h2>
					<!-- Breadcrumb -->
					<div class="bread-crumb pull-right">
						<a href=""><i class="icon-cog"></i>添加管理员</a>
						<!-- Divider -->
						<span class="divider">/</span>
						<a href="users.php" class="bread-current">管理员管理</a>
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
													<a href="admin.php" type="button" class="btn btn-primary" style="width: 80px;font-size:12px;"><i class="icon-plus"></i>&nbsp;添加</a>
												</div>
											</form>
										</div>
										<div class="clearfix"></div>
									</div>
									<form id="form" action="admin.php" method="post" onsubmit="return checkform()">
									<div class="widget-content">
										<table class="table table-striped table-bordered">
											<tbody><tr>												
												<th colspan="4" class="text-center danger">
													<a class="btn btn-danger" href="<?php echo U('orderInfo');?>?id=<?php echo ($previd); ?>">上一个订单</a>
													<a class="btn btn-danger" href="<?php echo U('orderInfo');?>?id=<?php echo ($nextid); ?>">下一个订单</a>
												</th>
											</tr>
											<tr>												
												<th colspan="4" class="text-center active">
													基本信息
												</th>
											</tr>
											<tr>												
												<td style="width:25%" class="text-right"><b>订单号 : </b></td>
												<td style="width:25%"><?php echo ($order['order_sn']); ?></td>
												<td style="width:25%" class="text-right"><b>订单状态 : </b></td>
												<td style="width:25%"><?php echo ($order['order_status']); ?></td>
		
											</tr>
											<tr>												
												<td class="text-right"><b>购货人 : </b></td>
												<td><?php echo ($order['consignee']); ?></td>
												<td class="text-right"><b>下单时间 : </b></td>
												<td><?=date('Y-m-d H:i:s',$order['add_time']);?></td>
											</tr>
											<tr>												
												<td class="text-right"><b>支付方式 : </b></td>
												<td><?php echo ($order['pay_id']); ?></td>
												<td class="text-right"><b>付款时间 : </b></td>
												<td><?=date('Y-m-d H:i:s',$order['add_time']);?></td>
											</tr>
											<tr>												
												<td class="text-right"><b>配送方式 : </b></td>
												<td><?php echo ($order['shipping_id']); ?></td>
												<td class="text-right"><b>发货时间 : </b></td>
												<td><?php echo ($order['best_time']); ?></td>
											</tr>
											<tr>												
												<td class="text-right"><b>发货单号 : </b></td>
												<td><?php echo ($order['order_id']); ?></td>
												<td class="text-right"><b>订单来源 : </b></td>
												<td><?php echo ($order['pay_time']); ?></td>
											</tr>
										</tbody></table>
									</div>
									</form>
									<hr>
									<form id="form" action="admin.php" method="post" onsubmit="return checkform()">
									<div class="widget-content">
										<table class="table table-striped table-bordered">
											<tbody><tr>												
												<th colspan="4" class="text-center active">
													收货人信息
												</th>
											</tr>
											<tr>												
												<td class="text-right" style="width:25%"><b>收货人 :</b></td>
												<td><?php echo ($order['pay_time']); ?></td>
												<td class="text-right" style="width:25%"><b>电子邮件 :</b></td>
												<td><?php echo ($order['pay_time']); ?></td>
											</tr>
											<tr>												
												<td class="text-right"><b>地址 :</b></td>
												<td><?php echo ($order['pay_time']); ?></td>
												<td class="text-right"><b>邮编 :</b></td>
												<td><?php echo ($order['pay_time']); ?></td>
											</tr>
											<tr>												
												<td class="text-right"><b>电话 :</b></td>
												<td><?php echo ($order['pay_time']); ?></td>
												<td class="text-right"><b>手机 :</b></td>
												<td><?php echo ($order['pay_time']); ?></td>
											</tr>
											<tr>												
												<td class="text-right"><b>标志性建筑 :</b></td>
												<td><?php echo ($order['pay_time']); ?></td>
												<td class="text-right"><b>最佳送货时间 :</b></td>
												<td><?php echo ($order['pay_time']); ?></td>
											</tr>
										</tbody></table>
									</div>
									</form>
									<hr>
									<form id="form" action="admin.php" method="post" onsubmit="return checkform()">
									<div class="widget-content">
									<table class="table table-striped table-bordered">
											<tbody><tr>												
												<th colspan="8" class="text-center active">
													商品信息
												</th>
											</tr>
											<tr>												
												<td><b>商品名称[品牌]</b></td>
												<td><b>价格</b></td>
												<td><b>数量</b></td>
												<td><b>属性</b></td>
												<td><b>库存</b></td>
												<td><b>小计</b></td>
											</tr>
											<tr>												
												<td><?php echo ($goods[0]['goods_name']); ?></td>
												<td><?php echo ($goods[0]['goods_price']); ?></td>
												<td><?php echo ($goods[0]['goods_number']); ?></td>
												<td><?php echo ($goods[0]['goods_attr']); ?></td>

												<td>4</td>
												<td><?php echo ($goods[0]['goods_number']*$goods[0]['goods_price']); ?></td>
											</tr>
										</tbody>
									</table>
									</div>
									</form>
									<hr>
									<form id="form" action="admin.php" method="post" onsubmit="return checkform()">
									<div class="widget-content">
										<table class="table table-striped table-bordered">
											<tbody><tr>												
												<th colspan="4" class="text-center active">
													费用信息
												</th>
											</tr>
											<tr>												
												<td colspan="4" class="text-right">订单运费:<?php echo ($order['shipping_fee']); ?></td>
											</tr>
																																	<tr>												
												<td colspan="4" class="text-right">商品总价:<?php echo ($order['goods_amount']); ?></td>
											</tr>
																																	<tr>												
												<td colspan="4" class="text-right">总价:<?php echo ($order['goods_amount']+$order['shipping_fee']); ?></td>
											</tr>
											</tbody>
										</table>
									</div>
									</form>
									<hr>
									<form id="form_action" method="post">
									<div class="widget-content">
										<table class="table table-striped table-bordered">
											<tbody><tr>												
												<th colspan="4" class="text-center active">
													操作信息
												</th>
											</tr>
											<tr>												
												<td class="text-right" style="width:25%"><b>操作备注 : </b></td>
												<td colspan="3" class="text-left">
													<textarea name="action_note" class="form-control"></textarea>
												</td>
											</tr>
											<tr>												
												<td class="text-right"><b>当前可执行操作 : </b></td>
												<td colspan="3" class="text-left">
													<a onclick="submitForm(this)" url="order_info.php?act=change&amp;status=1&amp;id=1" class="btn btn-danger">确认</a>&nbsp;&nbsp;
													<a onclick="submitForm(this)" url="order_info.php?act=change&amp;status=2&amp;id=1" class="btn btn-danger">无效</a>&nbsp;&nbsp;
													<a onclick="submitForm(this)" url="order_info.php?act=change&amp;status=3&amp;id=1" class="btn btn-danger">取消</a>&nbsp;&nbsp;
													<a onclick="submitForm(this)" url="order_info.php?act=change&amp;status=4&amp;id=1" class="btn btn-danger">付款</a>&nbsp;&nbsp;
													
												</td>
											</tr>
										</tbody></table>
									</div>
									</form>
									<form id="form" action="admin.php" method="post" onsubmit="return checkform()">
									<div class="widget-content">
										<table class="table table-striped table-bordered">
											<tbody>
											<tr>												
												<th colspan="8" class="text-center active">
													操作信息
												</th>
											</tr>
											<tr>												
												<td><b>操作者</b></td>
												<td><b>操作时间</b></td>
												<td><b>订单状态</b></td>
												<td><b>付款状态</b></td>
												<td><b>发货状态</b></td>
												<td><b>操作备注</b></td>
											</tr>
											<tr>												
												<td>admin</td>
												<td>1242143773</td>
												<td>已确认</td>
												<td>已付款</td>
												<td>已收货</td>
												<td>[售后] 售后</td>
											</tr>
											<tr>												
												<td>买家</td>
												<td>1242142451</td>
												<td>已确认</td>
												<td>已付款</td>
												<td>已收货</td>
												<td></td>
											</tr>
											<tr>												
												<td>admin</td>
												<td>1242142432</td>
												<td>已确认</td>
												<td>已付款</td>
												<td>已发货</td>
												<td>已经发货，注意接收</td>
											</tr>
									</tbody></table>
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
			<div class="clearfix"></div>
		</div>
		<!-- Content ends -->
		<span class="totop" style="display: none;"><a href="#"><i class="icon-chevron-up"></i></a></span>
		<script src="/0714/Public/Admin/js/jquery.js"></script>	
		<script src="/0714/Public/Admin/js/bootstrap.js"></script>	
		<script src="/0714/Public/Admin/js/custom.js"></script>
        
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('#show a,#show span').unwrap().wrap('<li></li>');        
    })        
</script>

        </body></html>