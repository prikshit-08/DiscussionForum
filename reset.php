<?php include('config.php')?>
<?php include('head.php')?>
<title>Log in|Dicussion Forum</title>
<style type="text/css">
    .btn-block{
        width: 10%;}
    .col-sm-offset-3{
        margin-left: 45%;
    }
    .form-horizontal .control-label {
        margin-left: 15%}
</style>
</head>
<body>
    <div class="w3-container">
    <?php include('navbar.php')?>
<?php
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  $select=mysql_query("select email,password from user where md5(email)='$email' and md5(password)='$pass'");
  if(mysql_num_rows($select)==1)
  {
    ?>
    <form method="post">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>
<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $select="update user set password='$pass' where email='$email'";
  if(mysqli_query($select,$con)){
    echo "<script type='text/javascript'>alert('Password Succesfully');
window.location='login.php';
</script>";
  }
}
?>
<?php include('footer.php')?>