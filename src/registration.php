<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: 20px;
    }
    body
    {
      background-image: url("images/register.jpg");
      height: 750px;
    }
    .box2
   {
      height: 629px;
      width: 450px;
      background-color: #12556b;
      margin-left: : 50px;
      opacity: .6;
      color: white;
      padding: 10px;
  }


  </style>   
</head>
<body>
  
<section>
  <div class="reg_img" style="height: 660px; margin-top: -10px auto;">

    <div class="box2">
        <h1 style="text-align: center; font-size: 30px;font-family: Georgia;"> &nbsp &nbsp   Library Management System</h1>
        <h2 style="text-align: center; font-size: 20px;">User Registration Form</h2><br>

      <form name="Registration" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>Male
          <input class="form-control" type="radio" name="gender" value="male">Female
          <input class="form-control" type="radio" name="gender" value="female"><br>
          <input class="btn btn-success" type="submit" name="submit" value="Sign Up" style="color: black; width: 330px; height: 30px; align-items: center; "> </div>
      </form>
     
    </div>
  </div>
</section>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]','$_POST[email]', '$_POST[contact]','$_POST[gender]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>

</body>
</html>