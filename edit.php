<?php include('session.php')?>
<?php include('config.php')?>
<?php include('head.php')?>
<title>Edit Profile</title>
<style type="text/css">
	.btn-block{
		width: 10%;}
	.col-sm-offset-3{
		margin-left: 45%;
	}
	.form-horizontal .control-label {
		margin-left: 15%;
	}
</style>
</head>
<body>
	<div class="w3-container">
	<?php include('navbar.php')?>
    <?php include('banner.php')?>
    <?php 
        $sql = "SELECT * FROM users WHERE id='$_SESSION[login_session_id]'";
        $result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
        while ($row = mysqli_fetch_array ($result)){
    ?>
          <div class="container">
            <form class="form-horizontal" method="post">
                <h2 align="center">Edit Details</h2><br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-3">
                        <input type="text" id="firstName" placeholder="Full Name" class="form-control" name="name" value="<?php echo $row ['name']; ?>" required="required">
                    </div>
                </div>
                  <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-3">
                        <input type="text" id="firstName" placeholder="Username" class="form-control" name="u_name" value="<?php echo $row ['username']; ?>" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-3">
                        <input type="email" id="email" placeholder="Email" class="form-control" name="email" value="<?php echo $row ['email']; ?>" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-3">
                        <input type="password" id="password" placeholder="Password" class="form-control" name="pass" value="<?php echo $row ['password']; ?>" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-3">
                        <input type="password" id="password" placeholder="Confirm Password" class="form-control" name="c_pass" value="<?php echo $row ['password']; ?>" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3" style="margin-left: 45%">
                        <button type="submit" class="btn btn-primary btn-block" style="width: 10%" name="submit">Submit</button>
                    </div>
                </div>
            </form>
    </div>
<?php } ?>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$uname=$_POST['u_name']; 
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['c_pass'];

$query = "UPDATE users SET name ='".$name."', username ='".$uname."', email = '".$email."', password = '".$pass."' WHERE id = '".$_SESSION['login_session_id']."' ";
if(mysqli_query($con, $query)){
 echo "<script type='text/javascript'>alert('Record Updated Succesfully');
window.location='profile.php';
</script>";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
}
?>

<?php include('footer.php')?>