<?php include('config.php')?>
<?php include('head.php')?>
<?php include('data.php')?>
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
                <h2 align="center">Forgot password</h2><br><br>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-3">
                        <input type="text" id="email" placeholder="Email" class="form-control" name="email" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <br><button type="submit" class="btn btn-primary btn-block" name="submit">Recover</button>
                    </div>
                </div>
            </form>
    </div>
<?php 
if(isset($_POST['submit']))
{
$email=$_POST['email'];
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
if ($count == 1){
               while($row = mysqli_fetch_array($result)){
                $email=md5($row['email']);
                $pass=md5($row['password']);
                $name=$row['name'];
               }
    $link="<a href='reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    require_once('phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;                  
    $mail->Username = $email;
    $mail->Password = $pass;
    $mail->SMTPSecure = "tls";  
    $mail->Host = "tls://smtp.gmail.com:587";
    $mail->Port = "587";
    $mail->SetFrom= $email;
    $mail->SetFromName= $from;
    $mail->AddAddress('prana803@gmail.com'); 
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }

            }
else{
 echo "<script type='text/javascript'>alert('Invalid Credentials')</script>";
}
}
?>
    
<?php include('footer.php')?>
