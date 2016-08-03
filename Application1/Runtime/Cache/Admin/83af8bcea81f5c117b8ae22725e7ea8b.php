<?php if (!defined('THINK_PATH')) exit();?><div class="mainbar">

				<!-- Page heading -->
				<div class="page-head">
					<h2 class="pull-left"><i class="icon-calendar"></i>管理员列表</h2>
					<!-- Breadcrumb -->
					<div class="bread-crumb pull-right">
						<a href=""><i class="icon-calendar"></i>管理员列表</a>
						<!-- Divider -->
						<span class="divider">/</span>
						<a href="javascript:void(0)" class="bread-current">管理员列表</a>
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
													<th>组名称</th>
													<th>组状态</th>
													<th>操作</th>
												</tr>
											</thead>
											<tbody>
                                                <?php if(is_array($groupList)): $i = 0; $__LIST__ = $groupList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><tr>	
                                                    <td><?php echo ($group['id']); ?></td>											
													<td><?php echo ($group['title']); ?></td>
													<td><?php echo ($group['status']); ?></td>
													<td>								
														<a class="btn btn-xs btn-warning" href="<?php echo U('access?id='.$group['id']);?>"><i class="icon-pencil"></i>&nbsp;访问授权</a>
														<a class="btn btn-xs btn-danger" href="<?php echo U('member?id='.$group['id']);?>"><i class="icon-remove"></i>&nbsp;成员授权</a>										
													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											</tbody>
										</table>
										<div class="widget-foot">
											<ul class="pagination pull-right" id="show1">
                                                <?php echo ($show); ?>
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