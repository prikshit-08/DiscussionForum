<?php include('session_admin.php')?>
<?php include('config.php')?>
<?php include('head.php')?>
<?php 
    /*if(isset($_REQUEST['duid'])){                //Delete User
        $id=$_REQUEST['duid'];
        $status=1;
        $query = "DELETE FROM users WHERE id = $id";
        if(mysqli_query($con, $query)){
        echo "<script type='text/javascript'>alert('User Deleted Succesfully');
         window.location='users.php';
         </script>";
        } else{
         echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
         }
    }*/
    if(isset($_REQUEST['pid'])){                    //Publish Post
        $id=$_REQUEST['pid'];
        $status=1;
        $query = "UPDATE posts SET status ='".$status."' WHERE id = '".$id."' ";
        if(mysqli_query($con, $query)){
        echo "<script type='text/javascript'>alert('Post Published Succesfully');
         window.location='posts.php';
         </script>";
        } else{
         echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
         }
    }
    if(isset($_REQUEST['uid'])){                  //Unpublish Post
        $id=$_REQUEST['uid'];
        $status=0;
        $query = "UPDATE posts SET status ='".$status."' WHERE id = '".$id."' ";
        if(mysqli_query($con, $query)){
        echo "<script type='text/javascript'>alert('Post unpublished Succesfully');
         window.location='posts.php';
         </script>";
        } else{
         echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
         }
    }
    if(isset($_REQUEST['did'])){                     //Delete Post
        $id=$_REQUEST['did'];
        $status=1;
        $query = "DELETE FROM posts WHERE id = $id";
        if(mysqli_query($con, $query)){
        echo "<script type='text/javascript'>alert('Post Deleted Succesfully');
         window.location='posts.php';
         </script>";
        } else{
         echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
         }
    }
    /*if(isset($_REQUEST['cdid'])){                      //Delete Comment
        $id=$_REQUEST['cdid'];
        $status=1;
        $query = "DELETE FROM comments WHERE id = $id";
        if(mysqli_query($con, $query)){
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
        } else{
         echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
         }
    }*/
?>
<title>Manage Posts||Dicussion Forum</title>
<style type="text/css">
.table {
    border-radius: 5px;
    width: 50%;
    margin: 0px auto;
    float: none;
}
td{
    text-align: left;
}
.center_t{
padding-top:2%;
text-align: center;
width: 70%;
margin-left: 300px;}

.heading{
  text-align: center;
  padding-top:1%;
  font-weight: bold;
  }
</style>
</head>
<body>
	<div class='w3-container'>
		<?php include('navbar.php')?> 
        <?php include('banner.php')?>
        <h3 class='heading'><strong>Posts</strong></h3>
        <div class='center_t'>
        <table class='table table-hover table-inverse'>
            <tr><th>S.No</th><th>Title</th><th>Description</th><th>Author</th><th>Updated on</th><th>Status</th><th>Action</th></tr>
        <?php 
        $sql = "SELECT b.*, a.name FROM posts AS b INNER JOIN users as a ON (b.user_id=a.id)";
        $result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
        $counter=0;
        while ($row = mysqli_fetch_array ($result)){?>
                <tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><a href="view_post_admin.php?vid=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></td>
                    <td><?php echo substr($row['description'],0,50);?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['updated_on'];?></td>
                    <td><?php if($row['status']==0):?>
                         <span><a href="posts.php?pid=<?php echo $row['id'];?>" class="btn btn-success" style='width: 50%' onclick="return confirm('Are you sure?')">Publish</a></span>
                         <?php endif; ?>
                         <?php if($row['status']==1): ?>
                         <span><a href="posts.php?uid=<?php echo $row['id'];?>"class="btn btn-warning" onclick="return confirm('Are you sure?')">Unpublish</a></span>
                          <?php endif; ?></td>
                    <td><span><a href="posts.php?did=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></span></td>
                </tr>
  <?php } 
    ?>
    </table>
    </div>  
     <br><br><br>
 
<?php include('footer.php')?>