<?php

	$con=mysqli_connect("localhost","root","","crimefiles");

	if(!$con)
	  die(mysqli_error());

		echo "Congo!! Connection established.";
	
	
	//variables
	
	 $police_id = mysqli_real_escape_string($con, $_POST['pi']);
	$first_name= mysqli_real_escape_string($con, $_POST['fn']);
$middle_name= mysqli_real_escape_string($con, $_POST['mn']);
$last_name= mysqli_real_escape_string($con, $_POST['ln']);
$address= mysqli_real_escape_string($con, $_POST['ad']);
$state= mysqli_real_escape_string($con, $_POST['st']);
$city= mysqli_real_escape_string($con, $_POST['ci']);
$zipcode= mysqli_real_escape_string($con, $_POST['zp']);
$birthday= mysqli_real_escape_string($con, $_POST['bi']);
$gender= mysqli_real_escape_string($con, $_POST['gd']);
$mobile_no= mysqli_real_escape_string($con, $_POST['mb']);
$email_id= mysqli_real_escape_string($con, $_POST['ed']);
$username= mysqli_real_escape_string($con, $_POST['us']);
$password= mysqli_real_escape_string($con, $_POST['pw']);
$repeat_password= mysqli_real_escape_string($con, $_POST['rp']);
       
	echo $repeat_password;
	
	$query="INSERT INTO police (police_id, first_name, middle_name, last_name, address, state, city, zipcode, birthday, gender, mobile_no, email_id, username, password, repeat_password) VALUES('$police_id','$first_name','$middle_name','$last_name','$address','$state','$city','$zipcode','$birthday','$gender', '$mobile_no', '$email_id', '$username', '$password', '$repeat_password')";
	
	if(!mysqli_query($con,$query))
	{
		die('Error:' .mysqli_error($con));
	}
	echo "1 record added";
	
        $result = mysqli_query($con,"SELECT * FROM police");
        echo "<table border='1'>
        <tr>
<th>police_id</th>
<th>first_name</th>
<th>middle_name</th>
<th>last_name</th>
<th>address</th>
<th>state</th>
<th>city</th>
<th>zipcode</th>
<th>birthday</th>
<th>gender</th>
<th>mobile_no</th>
<th>email_id</th>
<th>username</th>
<th>password</th>
<th>repeat_password</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
 echo "<tr>";
 echo "<td>".$row['police_id']."</td>";
echo "<td>".$row['first_name']."</td>";
echo "<td>".$row['middle_name']."</td>";
echo "<td>".$row['last_name']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['state']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['zipcode']."</td>";
echo "<td>".$row['birthday']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['mobile_no']."</td>";
echo "<td>".$row['email_id']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td>".$row['repeat_password']."</td>";
    
 echo "</tr>";
}
 
echo "</table>";
	//}
mysqli_close($con);	
	
?>