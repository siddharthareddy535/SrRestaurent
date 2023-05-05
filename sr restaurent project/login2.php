<?php
$name11=$_POST['Name'];
$email1=$_POST['email4'];
$adress1=$_POST['adress'];
$city1=$_POST['city'];
$state1=$_POST['country'];
$code1=$_POST['zipcode'];
$name21=$_POST['Name1'];
$card1=$_POST['number'];
$month1=$_POST['Month'];
$year1=$_POST['year'];
$cvv1=$_POST['cvv'];
$conn=new mysqli('localhost','root','','card');
if($conn->connect_error){
    die('connection Failed :' .$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into  details(name1,email,adress,city,state,code,name2,card,month,year,cvv) values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssisisii",$name11,$email1,$adress1,$city1,$state1,$code1,$name21,$card1,$month1,$year1,$cvv1);
    $stmt->execute();
    // echo '<h1 style="text-align:center">Sucess</h1>';
    $stmt->close();
    $conn->close();

}
?>
<html>
<head>
    <meta http-equiv="refresh" content="1; url=Thank.html"/>
</head>
<body>
    <!-- <h1 style="text-align:center"><a  href=Thank.html>Thanks</a><h1>
   <script src="script.js"></script>  -->
</body>
</html>
