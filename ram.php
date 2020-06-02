<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname ="monster";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if($conn){
    echo "your information is recorded succssfully";

}
else{
    die("connection is falied" .mysqli_connect_error());
}
?>