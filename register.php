<?php include('config.php')?>
<?php include('head.php')?>
<title>Sign up|Dicussion Forum</title>
<style type="text/css">
	.btn-block{
		width: 10%;}
	.col-sm-offset-3{
		margin-left: 45%;
	}
	.form-horizontal .control-label {
		margin-left: 15%;
	}
    .error{
        color: #ff0000;
    }
</style>
</head>
<body>
	<div class="w3-container">
	<?php include('navbar.php')?>

<script type="text/javascript">
        function checkField(){
        var name = document.getElementById('firstName').value;
        var uname = document.getElementById('username').value;
        var email= document.getElementById('Email').value;
        var pass = document.getElementById('password').value;
        var cpass = document.getElementById('cpassword').value;
        if(name==""){
            document.getElementById('name').innerHTML="Name Required";
            return false;
        }
        if(uname==""){
            document.getElementById('uname').innerHTML="Username Required";
            return false;
        }
        if(email==""){
            document.getElementById('email').innerHTML="Email Required";
            return false;
        }
        if(pass==""){
            document.getElementById('pass').innerHTML="Password Required";
            return false;
        }
        if(cpass==""){
            document.getElementById('cpass').innerHTML="Confirm Password Required";
            return false;
        }
        else
            return true;
    }
    </script>

          <div class="container">
            <form class="form-horizontal"  method="post" onsubmit="return checkField(this);">
                <h2 align="center">Registration</h2><br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-3">
                        <input type="text" id="firstName" placeholder="Full Name" class="form-control" name="name">
                    </div>
                    <p id="name" class="error"></p>
                </div>
                  <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-3">
                        <input type="text" id="username" placeholder="Username" class="form-control" name="u_name">
                    </div>
                     <p id="uname" class="error"></p>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-3">
                        <input type="email" id="Email" placeholder="Email" class="form-control" name="email">
                    </div>
                    <p id="email" class="error"></p>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-3">
                        <input type="password" id="password" placeholder="Password" class="form-control" name="pass">
                    </div>
                     <p id="pass" class="error"></p>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-3">
                        <input type="password" id="cpassword" placeholder="Confirm Password" class="form-control" name="c_pass">
                    </div>
                    <p id="cpass" class="error"></p>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <input type="hidden"  class="form-control" name="utype" value="User">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button  class="btn btn-primary btn-block" name="register" type="submit">Register</button>
                    </div>
                </div>
                <div style="text-align:center;">Already a member <a href="login.php">Sign in</a></div>
            </form>
    </div>
    
<?php 

if(isset($_POST['register']))
{
$name=$_POST['name'];
$uname=$_POST['u_name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$cpassword=$_POST['c_pass'];
$utype=$_POST['utype'];
if($password===$cpassword){
$query = "INSERT INTO users(name,username,email,password,utype) VALUES ('$name', '$uname', '$email','$password','$utype')";

if(mysqli_query($con, $query)){
 echo "<script type='text/javascript'>alert('Registered Succesfully');
window.location='login.php';
</script>";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
}
else{
	echo "<h4 style='text-align:center;color:red'>Password don't match</h4>";
}
}
?>
	
<?php include('footer.php')?>
