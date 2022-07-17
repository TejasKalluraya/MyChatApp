<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="image" height=50px; width=50px; style="display:block;margin:auto;">
          <div class="details">
            <p style="width:150px; justify-self:center"><?php echo $row['fname']. " " . $row['lname'] ?></p><br>
            <p style="width:150px">&nbsp(<?php echo $row['status']; ?>)&nbsp</p><br>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
          </div>  
    </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button style="height:45px;width:60px;"><i class="fas fa-search"></i></button>
      </div>
      <p style="padding:12px; width:100%;"> ACTIVE USERS </p>
      <br/>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
