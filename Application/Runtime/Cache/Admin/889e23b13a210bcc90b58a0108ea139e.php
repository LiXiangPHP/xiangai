<?php if (!defined('THINK_PATH')) exit();?>				<!-- Main bar -->
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
											<?php if(is_array($orderList)): $i = 0; $__LIST__ = $orderList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
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