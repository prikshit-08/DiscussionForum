<?php include('session_admin.php')?>
<?php include('config.php')?>
<?php include('head.php')?>
<?php 
    if(isset($_REQUEST['epid'])){                //Delete User
        $id=$_REQUEST['epid'];
    }
    ?>
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
        <?php 
        $sql = "SELECT * FROM posts WHERE id='$id'";
        $result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
        while ($row = mysqli_fetch_array ($result)){
    ?>
        <div class="container">
            <form class="form-horizontal" method="post">
                <h2 class="heading">Edit Post</h2><br>
                <div class="form-group">
                    <div class="col-sm-3"  style="width: 100%">
                        <input type="text" id="title" placeholder="Title" class="form-control" name="title" value="<?php echo $row ['title']; ?>" required="required">
                    </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-3"  style="width: 100%">
                        <input type="text" id="tags" placeholder="Tags" class="form-control" name="tags" value="<?php echo $row ['tags']; ?>" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3" style="width: 100%">
                        <textarea name="body" id="body" cols="30" rows="10"  style="width: 100%" name="body"><?php echo $row ['description']; ?></textarea>
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
                        <button type="submit" class="btn btn-primary btn-block" style="width: 15%" name="submit">Update Post</button>
                    </div>
                </div>
            </form>
    </div>
<?php
}

if(isset($_POST['submit']))
{
$title=$_POST['title'];
$tags=$_POST['tags']; 
$body=$_POST['body'];
$userid=$_SESSION['login_session_id'];

$query = "UPDATE posts SET title ='".$title."', tags ='".$tags."', description = '".$body."' WHERE id = '".$id."' ";

if(mysqli_query($con, $query)){
        header("Location: view_post_admin.php?vid=$id");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
}
?>
        
 <?php include('footer.php')?>