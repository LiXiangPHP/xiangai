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
					<h2 class="pull-left"><i class="icon-calendar"></i>系统设置</h2>

					<!-- Breadcrumb -->
					<div class="bread-crumb pull-right">
						<a href=""><i class="icon-calendar"></i>系统设置</a>
						<!-- Divider -->
						<span class="divider">/</span>
						<a href=" bushu.html" class="bread-current">角色管理</a>
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
													<button onclick="window.open('tianjia.html')" type="button" class="btn btn-primary" style="width: 80px;"><i class="icon-plus"></i>&nbsp;添加</button>
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
													<th>角色名称</th>
													<th>角色描述</th>
													<th>开启状态</th>
													<th>配置权限</th>
													<th>操作</th>
												</tr>
											</thead>
											<tbody>
												<tr>	
													<td>1</td>											
													<td>系统管理员</td>
													<td>系统管理员</td>
													<td>开</td>
													<td>配置权限</td>
													
													<td>								
														<button class="btn btn-xs btn-warning"><i class="icon-pencil"></i>&nbsp;编辑</button>
														<button class="btn btn-xs btn-danger"><i class="icon-remove"></i>&nbsp;删除</button>										
													</td>
												</tr>
												<tr>												
													<td>2</td>											
													<td>普通管理员</td>
													<td>普通管理员</td>
													<td>开</td>
													<td>配置权限</td>
													
													<td>								
														<button class="btn btn-xs btn-warning"><i class="icon-pencil"></i>&nbsp;编辑</button>
														<button class="btn btn-xs btn-danger"><i class="icon-remove"></i>&nbsp;删除</button>										
													</td>
												</tr>
												<tr>										
													<td>3</td>											
													<td>超级管理员</td>
													<td>超级管理员</td>
													<td>开</td>
													<td>配置权限</td>
													
													<td>								
														<button class="btn btn-xs btn-warning"><i class="icon-pencil"></i>&nbsp;编辑</button>
														<button class="btn btn-xs btn-danger"><i class="icon-remove"></i>&nbsp;删除</button>										
													</td>
												</tr>
												<tr>											
													<td>4</td>											
													<td>系统管理员</td>
													<td>系统管理员</td>
													<td>开</td>
													<td>配置权限</td>
													
													<td>								
														<button class="btn btn-xs btn-warning"><i class="icon-pencil"></i>&nbsp;编辑</button>
														<button class="btn btn-xs btn-danger"><i class="icon-remove"></i>&nbsp;删除</button>										
													</td>
												</tr>
												<tr>										
													<td>4</td>											
													<td>系统管理员</td>
													<td>系统管理员</td>
													<td>开</td>
													<td>配置权限</td>												
													<td>								
														<button class="btn btn-xs btn-warning"><i class="icon-pencil"></i>&nbsp;编辑</button>
														<button class="btn btn-xs btn-danger"><i class="icon-remove"></i>&nbsp;删除</button>										
													</td>
												</tr>
											</tbody>
										</table>
										<div class="widget-foot">
											<ul class="pagination pull-right">
												<li><a href="#">Prev</a>
												</li>
												<li><a href="#">1</a>
												</li>
												<li><a href="#">2</a>
												</li>
												<li><a href="#">3</a>
												</li>
												<li><a href="#">4</a>
												</li>
												<li><a href="#">Next</a>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
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
        
        </body></html>