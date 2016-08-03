<?php if (!defined('THINK_PATH')) exit();?><div class="mainbar">

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
													<th>商品名称</th>
													<th>商品分类</th>
													<th>商品价格</th>
													<th>商品图片</th>
													<th>商品库存</th>
													<th>操作</th>
												</tr>
											</thead>
											<tbody>
                                                <?php if(is_array($goodsList)): $i = 0; $__LIST__ = $goodsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><tr>	
                                                    <td><?php echo ($goods['id']); ?></td>											
													<td><?php echo ($goods['goods_name']); ?></td>
													<td><?php echo ($goods['cate_name']); ?></td>
													<td><?php echo ($goods['goods_price']); ?></td>
                                                    <td><img src="/0714/Uploads/<?php echo ($goods['goods_thumb']); ?>" width="80"/></td>
                                                    <td><?php echo ($goods['goods_store']); ?></td>
													
													<td>								
														<a class="btn btn-xs btn-warning" href="<?php echo U('update?id='.$goods['id']);?>"><i class="icon-pencil"></i>&nbsp;编辑</a>
														<a class="btn btn-xs btn-danger" href="<?php echo U('delete?id='.$goods['id']);?>"><i class="icon-remove"></i>&nbsp;删除</a>										
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
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Matter ends -->
</div>