<?php include('session.php')?>
<?php include('config.php')?>
<?php include('head.php')?>
<title>Dicussion Forum</title>
<style type="text/css">
.table {
    border-radius: 5px;
    width: 50%;
    margin: 0px auto;
    float: none;
}
.center_t{
padding-top:2%;
text-align: center;
width: 70%;
margin-left: 300px;}

.scrollbox {
  height: 225px;
  overflow: auto;
  visibility: hidden;
}

.scrollbox-content,
.scrollbox:hover,
.scrollbox:focus {
  visibility: visible;
}
.heading{
  text-align: center;
  padding-top:1%;
  font-weight: bold;
  background: #cccccc;
  }

td{
    text-align: left;
}
</style>
</head>
<body>
	<div class='w3-container'>
		<?php include('navbar.php')?> 
        <?php include('banner.php')?>
 <?php 
        $result = mysqli_query($con,"SELECT * FROM users where id='$_SESSION[login_session_id]'");
        while($row = mysqli_fetch_array($result))
  echo" <h3 class='heading'>User Detail</h3>
        <div class='center_t'>
        <table class='table table-hover table-inverse' style='width:50%'>  
        <tr>
        <th>Name</th>
        <td>$row[name]</td>
        </tr>
        <tr>
        <th>Username</th>
        <td>$row[username]</td>
        </tr>
        <tr>
        <th>Email</th>
        <td>$row[email]</td>
        </tr>
        </table>
        </div>";
?>
      <h3 align="center"><a href="edit.php " class="btn btn-primary"><b>Edit Details</b></a></h3><hr>
      <?php  
        /*Fetch User Data*/
           $sql = "SELECT * FROM users where id=$_SESSION[login_session_id]";
           $result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
           $row = mysqli_fetch_array ($result);
        if($row['utype']=="User"){?> <!--To Display data Only for user Profile-->
        <h3 align="center"><b>User Activity</b></h3><hr>
        <div class='center_t' style="padding-top: 0">
                <h3 class="heading">Posts</h3>
        <?php
        /*For Posts*/
        $sql = "SELECT * FROM posts where user_id=$_SESSION[login_session_id]";
        $result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
        $rowcount=mysqli_num_rows($result);
        $counter=0;
        if($rowcount>0){?>
            <div class="scrollbox">
                <div class="scrollbox-content">
            <table class='table table-hover table-inverse'>
            <tr><th>S.No</th><th>Title</th><th>Description</th><th>Tags</th><th>Updated on</th><th>Status</th></tr>
            <?php
        while ($row = mysqli_fetch_array ($result)){?>
                <tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><a href="view_post.php?vid=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['tags'];?></td>
                    <td><?php echo $row['updated_on'];?></td>
                    <td><?php if($row['status']==1):?>
                         <span>Publish</span>
                         <?php endif; ?>
                         <?php if($row['status']==0): ?>
                         <span>Unpublish</span>
                          <?php endif; ?></td>
                </tr>
     <?php }?>
             </table>
         </div>
     </div>
    <?php     }
            else
            echo "<br><br><h4 class='heading'><b>No Activity Found<hr></b></h4>"?>
        </div>
        <div class='center_t' style="padding-top: 0">
        <h3 class="heading">Comments</h3>
        <?php
        /*For Comments*/
        $sql1 = "SELECT * FROM comments where user_id=$_SESSION[login_session_id]";
        $result = mysqli_query ($con,$sql1) or die (mysqli_error ($con));
        $rowcount=mysqli_num_rows($result);
        $counter=0;
        if($rowcount>0){?>
            <div class="scrollbox">
                <div class="scrollbox-content">
            <table class='table table-hover table-inverse'>
            <tr><th>S.No</th><th>Comment</th><th>Updated on</th></tr>
            <?php
        while ($row = mysqli_fetch_array ($result)){?>
                <tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><?php echo $row['body'];?></td>
                    <td><?php echo $row['updated_on'];?></td>
                </tr>
     <?php }?>
             </table>
         </div>
     </div>
    <?php     }
            else
            echo "<br><br><h4 class='heading'><b>No Activity Found<hr></b></h4>";?>
        </div>
<?php  }
    ?>

<?php include('footer.php')?>