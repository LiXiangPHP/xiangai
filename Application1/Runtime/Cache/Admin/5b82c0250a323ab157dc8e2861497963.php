<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title></title> 
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <!-- Stylesheets -->
  <link href="/0708/Public/Admin/style/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="/0708/Public/Admin/style/font-awesome.css">
  <link href="/0708/Public/Admin/style/style.css" rel="stylesheet">
  <link href="/0708/Public/Admin/style/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="/0708/Public/Admin/js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="/0708/Public/Admin/img/favicon/favicon.png">
</head>

<body>

<!-- Form area -->
<div class="admin-form">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <!-- Widget starts -->
            <div class="widget worange">
              <!-- Widget head -->
              <div class="widget-head" style="padding: 8px 15px;">
                <i class="icon-lock"></i>&nbsp;Q管理平台
              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->
                  <form class="form-horizontal">
                    <!-- Email -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputEmail">管理员账号</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="inputEmail" name="username" placeholder="">
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputPassword">密码</label>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="">
                      </div>
                    </div>
                    <!-- Remember me checkbox and sign in button -->
                    <div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">自动登陆
                        </label>
						</div>
					</div>
					</div>
                        <div class="col-lg-9 col-lg-offset-2" style="text-align: center;">
							<button type="button" class="btn btn-danger">登陆</button>
							<button type="reset" class="btn btn-default">重置</button>
						</div>
                    <br />
                  </form>
				  
				</div>
                </div>
              
                <div class="widget-foot"style="text-align: center;">
                   肥猫国际购物商城　版权所有　京ICP证000007
                </div>
            </div>  
      </div>
    </div>
  </div> 
</div>
<!-- JS -->
<script src="/0708/Public/Admin/js/jquery-1.12.3.js"></script>
<script src="/0708/Public/Admin/js/bootstrap.js"></script>
<script>
    $(function() {
        // 为登陆按钮绑定单击事件
        $(':button:eq(0)').bind('click',function() {
			
           var data=$('form').serialize();
           var url='<?php echo U("logindoit");?>';
           $.post(url, data, function(data) {
               
                if(data.status) {
                    location.href=data.url;
                } else {
                    alert(data.info);
                }   
          });
        })
    });
</script>
</body>
</html>