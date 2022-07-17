<?php 
session_start();
include_once "config.php";
$sql = mysqli_query($conn,"SELECT * FROM users");
$output = "";
if(mysqli_num_rows($sql)==1){
    $output .= "No users are available to chat";
}
elseif(mysqli_num_rows($sql)>0){
    while($row = mysqli_fetch_assoc($sql))
    {
        $output .= '
        <a href="chat.php">
    <div class="content" style="padding:10px">
        <img src="php/images/'. $row['img'] .'" alt="" height=50px; width=50px>
        <br>
        <div class="details">
            <span">'. $row['fname']. " " . $row['lname'] .'</span>
            <p>test message</p>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
    </div>
        </div>
        </a>';
    }
}
echo $output;
?>