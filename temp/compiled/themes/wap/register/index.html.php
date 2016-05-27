<!DOCTYPE html>
<html>
<?php echo $this->fetch('head.html'); ?>
<body>
<div data-role="page">
<div class="header">
    <a class="left-btn" href="<?php echo R("/index.php");?>"><span class="iconfont icon-back"></span></a>
    <div class="title">用户注册</div>
     
  </div>
  
<form method="post" id="reg-form" action="/index.php?m=register&a=regSave"  class="form-horizontal " autocomplete="off">
<div class="pd-10">
	 
      
      <div class="input-row">
        <input type="text" id="nickname" class="input-text" name="nickname" placeholder="请输入用户名"  >
      </div>
      
      <div class="input-row">
        <input type="text" id="password" class="input-text" name="password" placeholder="请输入密码"  >
      </div>
      
      <div class="input-row">
        <input type="text" id="password2" class="input-text" name="password2" placeholder="请确认密码"  >
      </div>
      
      <div class="input-row" >
      	 <input name="checkcode" type="text" id="checkcode" style="width:60px; height:30px; float:left" />
        <img src="/index.php?m=checkcode" onClick="this.src='/index.php?m=checkcode&a='+Math.rand()" style="width:100px; height:30px;margin-left:20px; float:right" />
         
      </div>
      
      <div class="form-btns">
        <div class="row">
          
            <button type="button" id="reg-submit"  class="btn btn-row btn-larger btn-success">注册</button>
          </div>
          <div class="row">
          <a href="/index.php?m=login" style="background-color:#eee; width:98%; margin:0 auto; height:40px; text-align:center; line-height:40px; margin-top:20px; display:block">有账号，去登录&gt;&gt;</a> </div>
        </div>
</div>

 

    
 
</form>
 

<?php echo $this->fetch('footer.html'); ?>
</div>

<script type="text/javascript" class="jsa-text">
$(function(){
	var ispost=false;
	$("#reg-submit").on("click",function(){
		if(ispost==true) return false;
		ispost=true;
		setTimeout(function(){
			ispost=false;
		},1000);
		$.post("/index.php?m=register&a=regSave&ajax=1",$("#reg-form").serialize(),function(data){
			if(data.error==1){
				skyToast(data.message);
			}else{
				skyToast("注册成功");
				setTimeout(function(){
				window.location="/index.php";
				},700);
			}
		},"json");
	});
});
</script>
</body>
</html>
