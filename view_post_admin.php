<?php include('config.php')?>
<?php include('session_admin.php')?>
<?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
<?php include('head.php')?>
<?php 
     if(isset($_REQUEST['lcid'])){                    //Like Comment
        $id=$_REQUEST['lcid'];
        $query = "UPDATE views SET likes = likes + 1 WHERE comment_id = $id";
        if(mysqli_query($con, $query)){
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
        } else{
         echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
         }
    }
     if(isset($_REQUEST['ucid'])){                    //Unlike Comment
        $id=$_REQUEST['ucid'];
        $query = "UPDATE views SET dislikes = dislikes + 1 WHERE comment_id = $id";
        if(mysqli_query($con, $query)){
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
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
    }
?>
<title>Dicussion Forum</title>
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
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
    .heading{
        font-size: 30px;
        font-weight: bold;
        text-align: left;
    }
    .heading1{
        font-size: 25px;
        text-align: left;
    }
    .des{
        font-size: 20px;
        text-align: left;
    }
    .borderless td, .borderless th {
    border: none;
    }
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
        <div class="centerDiv">
        <?php
        if(isset($_REQUEST['vid'])){
        $id=$_REQUEST['vid'];
        $sql = "SELECT b.*, a.name FROM posts AS b INNER JOIN users as a ON (b.user_id=a.id) and b.id='$id'";
        $result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
        while ($row = mysqli_fetch_array ($result)){?>
        <div class='center_t'>
            <div class="heading" style="display: inline;float: left"><?php echo $row['title'];?></div><div style="float: right;display: inline;"><a class="btn btn-primary" href="edit_post.php?epid=<?php echo $row['id'];?>">Edit Post</a><br></div><br><hr>
            <div class="des"><?php echo $row['description'];?></div><div style="float: left; font-size: 15px;">asked by : <?php echo $row['name'];?></div><hr>
        </div>
     <?php     
      }
  }
    ?>  
	</div>
        <div class="centerDiv"><!--Comments-->
            <div class="center_t">
        <?php
        $id=$_REQUEST['vid'];
        $sql1="SELECT count($id) as totalComment FROM comments where post_id=$id ";
        $result = mysqli_query ($con,$sql1) or die (mysqli_error ($con));
        $row = mysqli_fetch_array ($result);?>
        <div class="heading1"><?php echo $row['totalComment'];?> Answers<br></div>   
        <?php   
       // $sql = "SELECT * FROM comments where post_id=$id ";
        $sql = "SELECT b.*, a.name,v.likes,v.dislikes FROM comments AS b INNER JOIN users as a ON (b.user_id=a.id) AND b.post_id=$id INNER JOIN views as v ON (b.id=v.comment_id)";
        $result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
        while ($row = mysqli_fetch_array ($result)){?>      
        <table class='table table-hover table-inverse'>
                <tr>
                    <td><?php echo $row['body'];?>
                    <div style="float: right"><a href="view_post_admin.php?cdid=<?php echo $row['id'];?>" class="btn btn-danger"onclick="return confirm('Are you sure?')">Delete</a></div><br>
                        <table class="table borderless">
                            <tr>
                                <td>by <?php echo $row['name'];?></td>
                                <td>Updated on:<?php echo $row['updated_on'];?></td>
                                <td><a href="view_post.php?lcid=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-thumbs-up"></span><?php echo $row['likes'];?></a></td>
                                <td><a href="view_post.php?ucid=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-thumbs-down"></span><?php echo $row['dislikes'];?></a></td>
                            </tr>
                        </table> </td>
                </tr>
            </table>
     <?php     
      }
        ?>

	<?php include('footer.php')?>