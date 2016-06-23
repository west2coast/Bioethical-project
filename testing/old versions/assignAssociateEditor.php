<?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if ($role == '5' || $role == '1'){
 
   
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"select Username, SubmissionTitle, 
CASE when Status = 1 then 'New Status - not assigned'
END as Status from manuscripts where Status = '1'");

echo "List of submissions not assigned";
echo "<table border='1'>
<tr>
	<th>Username</th>
	<th>Title</th>
	<th>Status</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "</tr>";
}
echo "</table>";

//mysqli_close($con);


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result2 = mysqli_query($con,"select Username from users where Role = '2'");

echo "\n";
echo "List of current associate editors";
echo "<table border='1'>
<tr>
	<th>Associate editors</th>
</tr>";

while($row = mysqli_fetch_array($result2))
{
echo "<tr>";
echo "<td>" . $row['Username'] . "</td>";
echo "</tr>";
}
echo "</table>";


 ?> 
 
<br>
<p>Choose the associate editor and the title to be assigned to them.
<form action="/associateEditorAssignment.php/" method="POST">

<select id="AssociateEditor" name="AssociateEditor">
<?php 
$sql = mysqli_query($con, "select Username from users where Role = '2'");
while ($row = mysqli_fetch_array($sql)){
echo '<option value="'.$row['Username'].'">' . $row['Username'] . '</option>';

}
 ?> 
 </select>
 <select id="SubmissionTitle" name="SubmissionTitle">
 <?php 
$sql2 = mysqli_query($con, "select Username, SubmissionTitle, 
CASE when Status = 1 then 'New status - not assigned'
END as Status from manuscripts where Status = '1'");
while ($row2 = mysqli_fetch_array($sql2)){
echo '<option value="'.$row2['SubmissionTitle'].'">' . $row2['SubmissionTitle'] . '</option>';
}
mysqli_close($con);
 ?> 
 </select>
 
 
    <input type="submit" value="submit">
</form>
<br><a href="/managingEditorMain.php">Managing Editor Main</a><br>
</p>


<?php
} else {
header('Location: /view.php/'); //change link to redirect user
}?> 