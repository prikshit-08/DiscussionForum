<?php include('session.php')?>
<?php include('config.php')?>
<?php include('head.php')?>
<title>Create Post|Discussion Forum</title>
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<style type="text/css">
.heading{
  text-align: center;
  padding-top: 1%;}
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
	<div class='w3-container'>
		<?php include('navbar.php')?> 
        <?php include('banner.php')?>
        <div class="container">
            <form class="form-horizontal" method="post">
                <h2 class="heading">Create Post</h2><br>
                <div class="form-group">
                    <div class="col-sm-3"  style="width: 100%">
                        <input type="text" id="title" placeholder="Title" class="form-control" name="title" required="required">
                    </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-3"  style="width: 100%">
                        <input type="text" id="tags" placeholder="Tags" class="form-control" name="tags" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3" style="width: 100%">
                        <textarea name="body" id="body" cols="30" rows="10"  style="width: 100%" name="body"></textarea>
                        <script type="text/javascript">
                         CKEDITOR.replace( 'body' );
                       </script>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <input type="hidden" id="status" class="form-control" name="status" value="0">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3" style="margin-left: 45%">
                        <button type="submit" class="btn btn-primary btn-block" style="width: 15%" name="submit">Create Post</button>
                    </div>
                </div>
            </form>
    </div>
<?php
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$tags=$_POST['tags']; 
$body=$_POST['body'];
$status=$_POST['status'];
$userid=$_SESSION['login_session_id'];

$query = "INSERT INTO posts(title,tags,description,user_id,status) VALUES ('$title', '$tags', '$body','$userid','$status')";

if(mysqli_query($con, $query)){
 echo "<script type='text/javascript'>alert('Post created Succesfully');
window.location='index.php';
</script>";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
}
?>
        
 <?php include('footer.php')?>

