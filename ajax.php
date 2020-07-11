<!DOCTYPE html>
<html>
<head>
<title>fetchResult.php</title>
<style>
table {
    width: 100%;
    border-collapse:collapse;
}

td,th {
    border: 2px solid black;
    padding: 5px;
    border-bottom: 2px solid #ddd;
}


</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"student_db");
$sql="SELECT * FROM posts WHERE title = '".$q."'";
$result = mysqli_query($con,$sql);

$num_rows = mysqli_num_rows($result);

if ($num_rows == 0) {
    echo "No records found";
} else {

echo "<table>
<tr>
<th>Roll Number</th>
<th>Name</th>
<th>Address</th>
<th>Branch</th>
<th>Result</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['s_rollno'] . "</td>";
    echo "<td>" . $row['s_name'] . "</td>";
    echo "<td>" . $row['s_address'] . "</td>";
    echo "<td>" . $row['s_branch'] . "</td>";
    echo "<td>" . $row['s_result'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
mysqli_close($con);
?>
</body>
</html>