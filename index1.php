<?php include('config.php')?>
<?php include('session.php')?>
<?php include('head.php')?>
<title>Dicussion Forum</title>
<style type="text/css">
	.centerDiv { width: 70%; 
		height:auto; 
		margin: 0 auto; 
		background-color:#cccccc; 
	}
	.float-right{
		text-align: right; 
		padding: 0px;
		margin-top: 0px;
	}
    hr.new3 {
    border-top: 1px dashed black;
}
</style>
</head>
<body>
	<div class='w3-container'>
		<?php include('navbar.php')?> 
        <?php include('banner.php')?>
    <div class="centerDiv">
		<h2  style="text-align: left">Recent Questions<a href="create_post.php" class="btn btn-success" style="text-align: right;margin-left: 982px;">Ask a question</a></h2>
		<hr class="new3"><br><hr>
	</div>

	<?php include('footer.php')?>