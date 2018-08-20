<?php
  session_start();


  $con=mysqli_connect ("localhost", "root", "password") or die ('Cannot connect to the database because: ' . mysql_error());
  mysqli_select_db ($con,'traveller');


  if(isset($_POST['submit1']))
  {
    @$username=$_POST['username1'];
    @$password=$_POST['password1'];
    @$cpassword=$_POST['password2'];
    @$email=$_POST['email'];
    @$mobile=$_POST['mobile'];

    if($password==$cpassword)
    {
      $query = "select * from userinfo where username='$username'";
      //echo $query;
    $query_run = mysqli_query($con,$query);
    //echo mysql_num_rows($query_run);
    if($query_run)
      {
        if(mysqli_num_rows($query_run)>0)
        {
          echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!");
          </script>';
        }
        else
        {
          $query = "insert into userinfo(username,password,email,mobile) values('$username','$password','$email','$mobile')";
          $query_run = mysqli_query($con,$query);
          if($query_run)
          {
            echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header( "Location: homepage.php");
          }
          else
          {
            echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
          }
        }
      }
      else
      {
        echo '<script type="text/javascript">alert("DB error")</script>';
      }
    }
    else
    {
      echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
    }

  }
  else
  {
  }
  ?>
