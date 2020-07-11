<?php include('config.php')?>
<?php include('head.php')?>
<title>Dicussion Forum</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style type="text/css">
	.centerDiv { width: 70%; 
		height:auto; 
		margin: 0 auto; 
		background-color:; 
	}
	.float-right{
		text-align: right; 
		padding: 0px;
		margin-top: 0px;
	}
	.new1{
		float: left;
		padding:10px;
	}
	.new2{
		float: right;
		padding: 10px;
	}
    hr.new3 {
    border-top: 1px dashed black;
    }
    .table {
    border-radius: 5px;
    width: auto;
    margin: 0px auto;
    float: none;
    background: white;
    }
    td{
    text-align: left;
    }
    tr{
        height: 10px;
    }
    .center_t{
     padding-top:2%;
     text-align: center;
     width: 70%;
     margin-left: 200px;
    }
  #loginForm { 
  display: none;

  border: 2px solid black; 
  width: 400px;
  text-align: center;
  background: #fff;
  position: fixed;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
  
}
#signupForm { 
  display: none;

  border: 2px solid black; 
  width: 400px;
  text-align: center;
  background: #fff;
  position: fixed;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
  
}
/*login form */
.form-control, .form-control:focus, .input-group-addon {
        border-color: #e1e1e1;
        border-radius: 0;
    }
    .login-form {
        width: 500px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .login-form form {
        border-radius: 1px;
        margin-bottom: 15px;
        background: #fff;
        border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;;
    }
    .login-form h2 {
        color: #636363;
        margin: 0 0 15px;
        text-align: center;
    }
    .login-form label {
        font-weight: normal;
        font-size: 13px;
    }
    .login-form .fa {
        font-size: 21px;
    }
    .login-form .input-group-addon {
        max-width: 42px;
        text-align: center;
        background: none;
        border-width: 0 0 1px 0;
        padding-left: 5px;
    }
    .login-form .form-control {
        min-height: 38px;
        box-shadow: none !important;
        border-width: 0 0 1px 0;
    }   
    .form-control, .btn {
        min-height: 38px
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
        background: #19aa8d;
    }
/* register form */
    .signup-form {
        width: 500px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .signup-form h2 {
        color: #636363;
        margin: 0 0 15px;
        text-align: center;
    }
    .signup-form .lead {
        font-size: 14px;
        margin-bottom: 30px;
        text-align: center;
    }
    .signup-form form {     
        border-radius: 1px;
        margin-bottom: 15px;
        background: #fff;
        border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .signup-form .form-group {
        margin-bottom: 20px;
    }
    .signup-form label {
        font-weight: normal;
        font-size: 13px;
    }
    .signup-form .form-control {
        min-height: 38px;
        box-shadow: none !important;
        border-width: 0 0 1px 0;
    }   
    .signup-form .input-group-addon {
        max-width: 42px;
        text-align: center;
        background: none;
        border-width: 0 0 1px 0;
        padding-left: 5px;
    }
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
        background: #19aa8d;
        border-radius: 3px;
        border: none;
        min-width: 140px;
        outline: none !important;
    }
    .signup-form .btn:hover, .signup-form .btn:focus {
        background: #179b81;
    }
    .signup-form a {
        color: #19aa8d;
        text-decoration: none;
    }   
    .signup-form a:hover {
        text-decoration: underline;
    }
    .signup-form .fa {
        font-size: 21px;
    }
    .signup-form .fa-paper-plane {
        font-size: 17px;
    }
    .signup-form .fa-check {
        color: #fff;
        left: 9px;
        top: 18px;
        font-size: 7px;
        position: absolute;
    }

/* search bar */ 
input[type=text] {
  box-sizing: border-box;
  border: 1px solid grey;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 30%;
}

    a:hover {
       cursor: pointer;
       background-color: yellow;
    }
/* page content */
.container{
    width: 55%;
    margin: 0 auto;
    padding-top:2%;
    border: 0px solid black;
    padding: 10px 0px;
}
/* post content */
.post{
    width: 97%;
    min-height: 200px;
    padding: 5px;
    border: 1px solid gray;
    margin-bottom: 15px;
}

.post h1{
    letter-spacing: 1px;
    font-weight: normal;
    font-family: sans-serif;
}


.post p{
    letter-spacing: 1px;
    text-overflow: ellipsis;
    line-height: 25px;
}

/* Load more */
.load-more{
    width: 99%;
    background: #a6a6a6;
    text-align: center;
    color: white;
    padding: 10px 0px;
    font-family: sans-serif;
}

.load-more:hover{
    cursor: pointer;
}
/* more link */
.more{
    color: blue;
    text-decoration: none;
    letter-spacing: 1px;
    font-size: 16px;
}
.navbar-brand:hover{
    background-color: #ccc;
}
</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript"> //Search Bar 
    $(document).ready(function() {
        $('#keyword').on('input', function() {
            var searchKeyword = $(this).val();
            if (searchKeyword.length >= 3) {
                $.post('search.php', { keywords: searchKeyword }, function(data) {
                    $('ul#content').empty()
                    $.each(data, function() {
                        $('ul#content').append('<li><a href="view_post.php?vid=' + this.id + '">' + this.title + '</a></li>');
                    });
                }, "json");
            }
        });
    });
    </script>
</head>
<body>
	<div class='w3-container'>
		<?php include('navbar.php')?>
        <!--<nav class="navbar navbar-dark bg-dark navbar-expand-md"> <a class="navbar-brand"  href="index.php">Discussion Forum</a>
    <ul class="nav navbar-nav">
        <li class="active nav-item"><a href="index.php" class="nav-link" style="font-size: 18px">Home</a>
        </li>
    </ul>
</nav>-->
        <?php include('banner.php')?>
    <div class="centerDiv">
              <form role="form" method="post">
              <input type="text" id="keyword"  placeholder="Enter Tags/Keywords"  style="margin-left: 35%; margin-top: 10px;" >
              </form>
               <ul id="content" style="margin-left: 35%;"></ul>
		<div class="new1"><p style="font-size: 25px">Recent Questions</p></div>
		<div class="new2"><a href="create_post.php" class="btn btn-success">Ask a question</a></div>
		<br><br><br><br>
		<div class='container'>
        <!--<table class='table table-hover table-inverse'>
        	<tr><th>S.No</th><th>Title</th><th>Description</th><th>Author</th><th>Updated on</th></tr>-->
		<?php 

            $rowperpage = 3;

            // counting total number of posts
            $allcount_query = "SELECT count(*) as allcount FROM posts WHERE status = 1";
            $allcount_result = mysqli_query($con,$allcount_query);
            $allcount_fetch = mysqli_fetch_array($allcount_result);
            $allcount = $allcount_fetch['allcount'];

        $sql = "SELECT b.*, a.name FROM posts AS b INNER JOIN users as a ON (b.user_id=a.id) order by id asc limit 0,$rowperpage";
        $result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
        $counter=0;
        while ($row = mysqli_fetch_array ($result)){
        	if($row['status']==1){ 
                $id = $row['id'];
                $title = $row['title'];
                $content = $row['description'];
                $shortcontent = substr($content, 0, 160);
                $name = $row['name'];
                ?>
                <div class="card">
                        <div class="card-header">
                                     Question <?php //echo ++$counter; ?>
                        </div>
                                     <div class="card-body">
                                     <h4 class="card-title"><?php echo $title; ?></h4>
                                     <p class="card-text"><?php echo $shortcontent; ?></p>
                                     <a href="view_post.php?vid=<?php echo $id ;?>" class="btn btn-primary">More</a>
                            </div>
                            <div class="card-footer">
                                   asked by :<?php echo $name; ?> 
                            </div>
                </div>              
                <br><br>
                    <!--<div class="post" id="post_<?php echo $id; ?>">
                    <h1><?php echo $title; ?></h1>
                    <small>asked by :<?php echo $name; ?> </small>
                    <p>
                        <?php echo $shortcontent; ?>
                    </p>
                    <a href="view_post.php?vid=<?php echo $id ;?>" target="_blank" class="more">More</a>
                </div>-->
            <?php
            }
        } 
        ?>
        <h1 class="load-more">Load More</h1>
            <input type="hidden" id="row" value="0">
            <input type="hidden" id="all" value="<?php echo $allcount; ?>">
            <!--<input type="hidden" id="counter" value="<?php echo $counter; ?>">-->
<!-- ajax request for loading more data-->
<script type="text/javascript">
    $(document).ready(function(){

    // Load more data
    $('.load-more').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        var counter = Number($('#counter').val());
        var rowperpage = 3;
        row = row + rowperpage;

        if(row <= allcount){
            $("#row").val(row);
            $("#counter").val(counter);
            var data = "row="+ row + "&counter=" + counter;

            $.ajax({
                url: 'getData.php',
                type: 'post',
                data: data,

                beforeSend:function(){
                    $(".load-more").text("Loading...");
                },
                success: function(response){

                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".card:last").after(response).show().fadeIn("slow");

                        var rowno = row + rowperpage;

                        // checking row value is greater than allcount or not
                        if(rowno > allcount){

                            // Change the text and background
                            $('.load-more').text("Hide");
                            $('.load-more').css("background","#737373");
                        }else{
                            $(".load-more").text("Load more");
                        }
                    }, 2000);

                }
            });
        }else{
            $('.load-more').text("Loading...");

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.card:nth-child(3)').nextAll('.card').remove();

                // Reset the value of row
                $("#row").val(0);

                // Change the text and background
                $('.load-more').text("Load more");
                $('.load-more').css("background","#a6a6a6");
                
            }, 2000);


        }

    });

});
</script>
                <!--<tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><a href="view_post.php?vid=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></td>
                    <td><?php echo substr($row['description'],0,50);?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['updated_on'];?></td>
                </tr>
    </table>-->
    </div>
	</div>
<div class="login-form" id="loginForm">
    <form  method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="u_name" placeholder="Username" required="required">
        </div>
    </div>
        <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
    </div>
     <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
            <select name = "role" class="form-control" required="required">
                             <option value = "" disabled selected>Role</option>
                             <option value = "Admin">Admin</option>
                             <option value = "User">User</option>
                        </select>
        </div>
    </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="login">Log in</button>
        </div>       
    </form>
</div>


<div class="signup-form" id="signupForm">   
    <form method="post" >
        <h2>Create Account</h2>
            <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Fullname" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="u_name" placeholder="Username" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" class="form-control" name="pass" placeholder="Password" required="required">
            </div>
        </div> 
            <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" class="form-control" name="c_pass" placeholder="Confirm Password" required="required">
            </div>
        </div> 
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" name="register">Sign Up</button>
        </div>
    </form>
</div>

<!-- For login and signup pop ups -->
<script type="text/javascript">
$(function() {
  
  // contact form animations
  $('#show_signin').click(function() {
    $('#loginForm').fadeToggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#loginForm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
});

$(function() {
  
  // contact form animations
  $('#show_signup').click(function() {
    $('#signupForm').fadeToggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#signupForm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
});
</script>
<!-- login  -->
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
<!-- register -->
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