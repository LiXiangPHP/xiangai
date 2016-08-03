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
					<h2 class="pull-left"><i class="icon-list-alt"></i>添加商品</h2>

					<!-- Breadcrumb -->
					<div class="bread-crumb pull-right">
						<a href="<?php echo U('lists');?>"><i class="icon-list-alt"></i>商品列表</a>
						<!-- Divider -->
						<span class="divider">/</span>
						<a href="<?php echo U('insert');?>" class="bread-current">添加商品</a>
					</div>

					<div class="clearfix"></div>

				</div>
				<!-- Page heading ends -->

				<!-- Matter -->
		          
	    <div class="matter">
        <div class="container">

          <div class="row">

            <div class="col-md-12">


              <div class="widget wgreen">
                
                <div class="widget-head" style="padding: 8px 15px;">
                  <div class="pull-left">添加商品</div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">            
                    <!-- Form starts.  -->
                     <form id="form" class="form-horizontal" role="form">
                               
                                <div class="form-group">
                                  <label class="col-lg-4 control-label">组名称</label>
                                  <div class="col-lg-8">
                                    <input class="form-control" type="text" name="title">
                                    <p class="help-block" style="color: #EC4844;"></p>
                                  </div>
                                </div>
								<div class="form-group">
                                  <label class="col-lg-4 control-label">状态</label>
                                  <div class="col-lg-8">
                                    <input class="form-control" type="text" name="status">
                                    <p class="help-block" style="color: #EC4844;"></p>
                                  </div>
                                </div>
                                                                                                                                                 
                                
                                <div class="form-group">
                                  <div class="col-lg-offset-1 col-lg-9">
                            
                                    <button type="button" class="btn btn-primary" id="formSubmit">保存添加</button>
                                  
                                    <button type="button" class="btn btn-danger">关闭</button>
                                  </div>
                                </div>
                              </form>
                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>  

            </div>

          </div>

        </div>
	</div>
</div>

			<!-- Mainbar ends -->
			<div class="clearfix"></div>
		</div>
		<!-- Content ends -->
		<span class="totop" style="display: none;"><a href="#"><i class="icon-chevron-up"></i></a></span>
		<script src="/0708/Public/Admin/js/jquery.js"></script>	
		<script src="/0708/Public/Admin/js/bootstrap.js"></script>	
		<script src="/0708/Public/Admin/js/custom.js"></script>
        
<script type="text/javascript" src="/0708/Public/Admin/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/0708/Public/Admin/Ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/0708/Public/Admin/Ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
  <!-- var ue = UE.getEditor('editor'); -->
  $('#formSubmit').bind('click', function() {
      var data = new FormData($('#form')[0]);
      $.ajax({
        url:'/0708/admin.php/Group/insertDoit',
        data:data,
        type:'post',
        success:function(data) {
          if(data.status) {
		 
            location.href=data.url;
          } else {
            alert(data.info);
          }
        },
        dataType:'json',
        cache:false,
        contentType:false,
        processData:false
      });
  });
</script>

        </body></html>