<?php
        while($row = mysqli_fetch_assoc($query))
        {
            $output .= '
            <a href="chat.php?user_id='.$row['unique_id'].'">
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
?>