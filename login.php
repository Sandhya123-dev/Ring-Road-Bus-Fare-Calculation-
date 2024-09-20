<?php
   
    if(isset($_POST['login']))
    {
       
        $email = $_POST['email'];  
       
        $password = $_POST['password'];
       
        
    }   
    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "busproject";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query ="SELECT * FROM register WHERE email ='$email' LIMIT 1";
        $result = mysqli_query($con, $query);
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password']== $password)
                {
                    header("location: dashboard.php");
                    
                    exit();
                }
            }
        }
        echo "<script type='text/javascript'> alert('wrong email or password')</script>";
      }
      



  // session_start();
  // include("register.php");
  // if($_SERVER['REQUEST_METHOD'] == "POST")
  // {
  //   $email = $_POST['email'];
  //   $password = $_POST['password'];
  //   if(!empty($gmail) && !empty($password) && !is_numeric($email))
  //   {
  //       $query =" select * from form where email ='$email' limit 1";
  //       $result = mysqli_query($con, $query);
  //       if($result)
  //       {
  //           if($result && mysqli_num_rows($result)>0)
  //           {
  //               $user_data = mysqli_fetch_assoc($result);
                
  //               if($uxer_data['pass']== $password)
  //               {
  //                   header("locaction: dashboard.html");
  //                   die;
  //               }
  //           }
  //       }
  //       echo "<script type='text/javascript'> alert('wrong email or password')<script>";
        
  //   }
  //   echo "<script type='text/javascript'> alert('wrong email or password')<script>";
  // }
?>