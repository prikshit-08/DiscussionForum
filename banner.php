<?php include('config.php')?>
<?php  include('head.php'); ?>
<style type="text/css">
	.float-right{
		text-align: right; 
		background: #cccccc;
		padding: 0px;
		margin-top: 0px;
	}
	.float-left{
		text-align: left; 
		background: #cccccc;
		padding: 0px;
		margin-top: 0px;
	}
	.navbar{
		margin-bottom: 0px;
		padding-bottom: 0px;
	}
</style>
<?php if (isset($_SESSION['login_session'])) { ?>
	<div class='float-right'>
		<span>Welcome, <a href="profile.php"><?php echo $_SESSION['login_session'] ?></a></span>
		|
		<span><a href="logout.php">Sign out</a></span>
	</div>
<?php if (($_SESSION['login_session'])==='Admin') { ?>
    		<span><a href="admin.php" class="btn btn-primary">Admin Panel</a></span>
<?php } ?>
<?php }else{ ?>
		<div class='float-right'>
		<span><button class="btn btn-primary" id="show_signup">Sign up</button></span>
		|
		<span><button class="btn btn-success" id="show_signin">Sign in</button></span>

		</div>
<?php } ?>
