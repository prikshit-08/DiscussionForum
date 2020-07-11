<?php include('session_admin.php')?>
<?php include('config.php')?>
<?php include('head.php')?>
<?php 
    if(isset($_REQUEST['duid'])){                //Delete User
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
    }
    /*if(isset($_REQUEST['pid'])){                    //Publish Post
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
    if(isset($_REQUEST['cdid'])){                      //Delete Comment
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
<title>Manage Users|Dicussion Forum</title>
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
        <h3 class='heading'><strong>Users</strong></h3>
        <div class='center_t'>
        <table class='table table-hover table-inverse'>
            <tr><th>S.No</th><th>Name</th><th>Username</th><th>Email</th><th>Action</th></tr>
        <?php 
        $sql = "SELECT * FROM users";
        $result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
        $counter=0;
        while ($row = mysqli_fetch_array ($result)){ if($row['utype']=='User'){?>
                <tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><span><a href="users.php?duid=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></span></td>
                </tr>
  <?php } }
    ?>
    </table>
            </div>   
            <br><br><br>
 
<?php include('footer.php')?>