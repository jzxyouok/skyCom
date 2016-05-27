<!DOCTYPE html>
<html>
<?php echo $this->fetch('head.html'); ?>
<body>
 <div class="header">
 	<a  class="left-btn" href="<?php echo R("/index.php");?>"><span class="iconfont icon-back"></span></a>
 	<div class="title">登录</div>
 </div>
<div data-role="page" >  
  <form method="post" id="login-form" action="/index.php?m=login&a=loginSave"  class="form-horizontal " autocomplete="off">
    <div class="pd-10">
      <div class="input-row">
        <input type="text" id="inputEmail" class="input-text" name="username" placeholder="请输入用户名"  >
      </div>
      <div class="input-row">
        <input type="password" id="inputPassword" class="input-text"   name="password" placeholder="请输入密码">
      </div>
      <div class="form-btns">
        <div class="row">
         
            <button type="button" id="login-submit" class="btn btn-row btn-larger btn-success">登陆</button>
          
           
        </div>
      </div>
      
      <div class="row"><p><a href="/index.php?m=register&a=reg" style="background-color:#eee; width:98%; margin:0 auto; height:40px; text-align:center; line-height:40px; margin-top:20px; display:block">还不是会员？立即注册</a></p></div>
    </div>
  </form>
  <?php echo $this->fetch('footer.html'); ?> </div>
<script type="text/javascript" class="jsa-text">
$(function(){
	$(document).on("click","#login-submit",function(){		
		$.post("/index.php?m=login&a=loginSave&ajax=1",$("#login-form").serialize(),function(data){
			if(data.error==1){
				skyToast(data.message);
			}else{
				skyToast("登陆成功");
				setTimeout(function(){
					window.location='/index.php';
				},700);
			}
		},"json");
	});
});
</script>
</body>
</html>
