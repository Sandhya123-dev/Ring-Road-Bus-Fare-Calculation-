<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $password = $_POST['password'];
        $cPassword = $_POST['confirmPassword'];
        
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

    
    // using sql to create a data entry query
    $sql = "INSERT INTO register (id, firstname, lastname, email, phone, gender,age,password,confirmPassword) VALUES ('0', '$fname', '$lname', '$email','$phone','$gender','$age','$password','$cPassword')";


    // $sql = "INSERT INTO 'register'('id', 'firstName, 'lastname', 'phone', 'email', 'gender', 'age', 'password', 'confirmPassword') VALUES ('1','$fname','$lname','$email','$phone','$gender','$age','$password','$cPassword')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        // echo "Entries added!";
        echo '<script>alert("Entries added!")</script>';
    }
  
    // close connection
    mysqli_close($con);
?>