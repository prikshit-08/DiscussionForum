<?php

// configuration
include 'config.php';

$row = $_POST['row'];
//$counter = $_POST['counter'];
$rowperpage = 3;

// selecting posts
$query = "SELECT b.*, a.name FROM posts AS b INNER JOIN users as a ON (b.user_id=a.id) order by id asc limit $row,$rowperpage";
$result = mysqli_query($con,$query);


while($row = mysqli_fetch_array($result)){
    if($row['status']==1){ 
    $id = $row['id'];
    $title = $row['title'];
    $name = $row['name'];
    $content = $row['description'];
    $shortcontent = substr($content, 0, 160);
    // Creating HTML structure
    /*$html .= '<div id="post_'.$id.'" class="post">';
    $html .= '<h1>'.$title.'</h1>';
    $html .= '<small>asked by :'.$name.'</small>';
    $html .= '<p>'.$shortcontent.'</p>';
    $html .= '<a href="view_post.php?vid='.$id.'" target="_blank" class="more">More</a>';
    $html .= '</div>';*/
     ?>
     <br><br>
     <div class="card">
                <div class="card-header">
                        Question
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
   <?php
}
}
?>