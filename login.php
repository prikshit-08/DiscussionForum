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
          <div class="container">
            <form class="form-horizontal" method="post">
                <h2 align="center">Log in</h2><br><br>
                  <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-3">
                        <input type="text" id="firstName" placeholder="Username" class="form-control" name="u_name" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-3">
                        <input type="password" id="password" placeholder="Password" class="form-control" name="pass" required="required">
                        <a style="position: relative;margin-left: 56%" href="forgotPassword.php">Forgot password?</a>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="role" class="col-sm-3 control-label">Role</label>
                    <div class="col-sm-3">
                        <select name = "role" class="form-control" required="required">
                             <option value = "" disabled selected>Role</option>
                             <option value = "Admin">Admin</option>
                             <option value = "User">User</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <br><button type="submit" class="btn btn-primary btn-block" name="login">Sign in</button>
                    </div>
                </div>
                <div style="text-align:center;">Don't have an account? <a href="register.php">Register</a></div>
            </form>
    </div>
<?php 
if(isset($_POST['login']))
{
$userName=$_POST['u_name'];
$passWord=$_POST['pass'];
$role=$_POST['role'];
    $query = "SELECT * FROM users WHERE username='$userName' and password='$passWord' and utype='$role'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
if ($count == 1){
                
                if($row['utype']=="Admin"){
                    session_start();
                $_SESSION['login_session']=$row['name'];
                $_SESSION['login_session_id']=$row['id'];
                header("location: admin.php");
            }
            elseif($row['utype']=="User"){
                session_start();
                $_SESSION['login_session']=$row['name'];
                $_SESSION['login_session_id']=$row['id'];
                if(isset($_SESSION['url'])) 
                   $url = $_SESSION['url'];
               else 
                    $url = "index.php"; 
                header("location: $url");
            }
            }
else{
 echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
}
}
?>
    
<?php include('footer.php')?>
