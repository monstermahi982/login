<?php
$fname = filter_input(INPUT_POST,'fname');
$sname = filter_input(INPUT_POST,'sname');
$mobile = filter_input(INPUT_POST,'mobile');
$dob = filter_input(INPUT_POST,'dib');
$gmail = filter_input(INPUT_POST,'gmail');
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname ="monster";

        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if(mysqli_connect_error())            {
            die('Connect Error ('. mysqli_connect_errno().')'
            . mysqli_connect_error());        }
        else{
                $sql = "INSERT INTO raw (fname,sname,mobile,dob,gmail,username, password)
                values ('$fname','$sname','$mobile','dob','$gmail','$username','$password')";
                if ($conn->query($sql)){
                    header('location:login.php');             
                                       }
        else{
            echo "ERROR: " . $sql . "<br>" . $conn->error; 
            }
        $conn->close();
            }
?>