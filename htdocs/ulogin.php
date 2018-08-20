<?php
  session_start();

  $con = mysqli_connect ("localhost", "root", "password") or die ('Cannot connect to the database because: ' . mysql_error());
  mysqli_select_db ($con,'traveller');


  if(isset($_POST['submit']))
  {
    @$username=$_POST['username'];
    @$password=$_POST['password'];
    $query = "select * from userinfo where username='$username' and password='$password' ";

    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
      if(mysqli_num_rows($query_run)>0)
      {
      $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);

      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      echo '<script type="text/javascript">alert("Welcome User")</script>';
      header( "Location: loginhtml.php");
      }
      else
      {
        echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
      }
    }
    else
    {
      echo '<script type="text/javascript">alert("Database Error")</script>';
    }
  }
  else
  {
  }



  ?>
