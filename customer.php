 <!-- this page tells address of user  -->
<html>
<head>
<title>
	CUSTOMER ADDRESS
</title>
</head>
<body>
<?php
require('db.php');
include("auth.php");
include('navbar.php');
$username=$_SESSION['username'];

$query ="SELECT * FROM user_address,users WHERE user_address.username='$username' AND users.username='$username'";

$result = mysqli_query($con, $query);
$ary = mysqli_fetch_array($result);
if(!$ary){
	echo "<center>";
	echo "<h1>You have not added any address yet !!</h1>";
	echo "<br><br><a href ='user_address.php'><h2>Add Your Address</h2></a></center>";
}
else {
	$result = mysqli_query($con,$query);
echo "<h1 align='CENTER'>YOURS ADDRESSES ARE</h1>";
 echo "<table border='1' align='center' width='100%'>

<tr >

<th>username</th>

<th>address</th>

<th>city</th>
<th>state</th>
<th>country</th>
<th>pincode</th>
<th>phone no.</th>

<th>email</th>

</tr>";
    while ($row = mysqli_fetch_array($result))
	{	echo "<tr>";
        echo "<td>".$row['username']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['city']."</td>";
		echo "<td>".$row['state']."</td>";
		echo "<td>".$row['country']."</td>";
		echo "<td>".$row['pincode']."</td>";
		echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['email']."</td>";
		echo "</tr>";
		echo "</br>";
    }
echo "</table>";
}
?>


</body>
</html>
