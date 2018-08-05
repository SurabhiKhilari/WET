<?php

	$con=mysqli_connect('localhost','root','','crimefiles');

	if(!$con)
	 die(mysqli_error());

		echo "Congo!! Connection established.";
	
	
	//variables
	
	$username = mysqli_real_escape_string($con, $_POST['us']);
	$subject= mysqli_real_escape_string($con, $_POST['su']);
$crime_desc= mysqli_real_escape_string($con, $_POST['cd']);
$suspect_name= mysqli_real_escape_string($con, $_POST['sn']);
$suspect_desc= mysqli_real_escape_string($con, $_POST['sd']);
$date= mysqli_real_escape_string($con, $_POST['da']);
$time= mysqli_real_escape_string($con, $_POST['ti']);
$am_pm= mysqli_real_escape_string($con, $_POST['ap']);
$mobile_no= mysqli_real_escape_string($con, $_POST['mo']);
$email_id= mysqli_real_escape_string($con, $_POST['em']);

	
	
	$sql="INSERT INTO complaints (username, subject, crime_desc, suspect_name, suspect_desc,
date, time, am_pm, mobile_no, email_id) VALUES ('$username', '$subject', '$crime_desc', '$suspect_name', '$suspect_desc',
'$date', '$time', '$am_pm', '$mobile_no', '$email_id')";
	
	if(!mysqli_query($con,$sql))
	{
		die('Error:' .mysqli_error($con));
	}
	echo "1 record added";
	
        $result = mysqli_query($con,"SELECT * FROM complaints");
        echo "<table border='1'>
        <tr>
<th>username</th>
<th>subject</th>
<th>crime_desc</th>
<th>suspectname</th>
<th>suspect_desc</th>
<th>date</th>
<th>time</th>
<th>am_pm</th>
<th>mobile_no</th>
<th>email_id</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
 echo "<tr>";
 echo "<td>".$row['username']."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['crime_desc']."</td>";
echo "<td>".$row['suspect_name']."</td>";
echo "<td>".$row['suspect_desc']."</td>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['time']."</td>";
echo "<td>".$row['am_pm']."</td>";
echo "<td>".$row['mobile_no']."</td>";
echo "<td>".$row['email_id']."</td>";

 echo "</tr>";
}
 
echo "</table>";
	//}
mysqli_close($con);	
	
?>