<?php
$username=$_POST['uname'];
$password=$_POST['psw'];

$conn=new mysqli('localhost','root','','sr-restaurent');
if($conn->connect_error){
    die('connection Failed :' .$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into  register(usered,passed) values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo "succesfully";
    $stmt->close();
    $conn->close();

}
?>
<html>
<head>
   
    <style>
    p{    
   
    justify-content: space-around;
    /* color: blue; */
    text-align: center;
    /* position: absolute; */
    /* left: 100px; */
    /* top: 100px; */
    font-size: xx-large;
    border-radius: 30px;
    /* border-color: beige; */
    background-color: green;
    border-style: solid;

    }
    </style>
</head>
<body>
    <p id="nm1"><a  href="home.html">Home</a></p>
</body>
</html>