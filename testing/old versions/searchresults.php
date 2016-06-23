<?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];

$searchValue=$_POST["searchValue"];
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if ($role == '1'){
 
if ($_POST["select"] == Author){ 
  $select=Author;
  $result = mysqli_query($con,"select a.JBIN, a.Author, a.SubmissionTitle,
	a.ReviewerAssigned, a.Review, a.ReviewFile, 
	c.DescriptionDecision as AEDecision, d.DescriptionDecision as MEDecision
	from manuscriptAssignment a
	join decisions b on a.SubmissionTitle = b.SubmissionTitle
    join statuses c on c.DecisionID = b.AEDecision
	join statuses d on d.DecisionID = b.MEDecision
	where (a.Author like '%$searchValue%') and (a.AssocEditorAssign = '')");
	
echo "Search Results";
echo "<table border='1'>
<tr>
	<th>JBIN</th>
	<th>Author</th>
	<th>Title</th>
	<th>Reviewer assigned</th>
	<th>Review</th>
	<th>Review file</th>
	<th>Associate Editor Decision</th>
	<th>Managing Editor Decision</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['ReviewerAssigned'] . "</td>";
echo "<td>" . $row['Review'] . "</td>";
echo "<td>" . $row['ReviewFile'] . "</td>";
echo "<td>" . $row['AEDecision'] . "</td>";
echo "<td>" . $row['MEDecision'] . "</td>";
echo "</tr>";
}
echo "</table>";
  
}
if ($_POST["select"] == JBIN){ 
  $select=JBIN;
  $result = mysqli_query($con,"select a.JBIN, a.Author, a.SubmissionTitle,
	a.ReviewerAssigned, a.Review, a.ReviewFile, 
	c.DescriptionDecision as AEDecision, d.DescriptionDecision as MEDecision
	from manuscriptAssignment a
	join decisions b on a.SubmissionTitle = b.SubmissionTitle
    join statuses c on c.DecisionID = b.AEDecision
	join statuses d on d.DecisionID = b.MEDecision
	where ('$select' like '%$searchValue%') 
	and (AssocEditorAssign = '')");
	
echo "Search Results";
echo "<table border='1'>
<tr>
	<th>JBIN</th>
	<th>Author</th>
	<th>Title</th>
	<th>Reviewer Assigned</th>
	<th>Review</th>
	<th>Review file</th>
	<th>Associate Editor Decision</th>
	<th>Managing Editor Decision</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['ReviewerAssigned'] . "</td>";
echo "<td>" . $row['Review'] . "</td>";
echo "<td>" . $row['ReviewFile'] . "</td>";
echo "<td>" . $row['AEDecision'] . "</td>";
echo "<td>" . $row['MEDecision'] . "</td>";
echo "</tr>";
}
echo "</table>";
  
}

if ($_POST["select"] == Title){ 
  $select=a.SubmissionTitle;
  $result = mysqli_query($con,"select a.JBIN, a.Author, a.SubmissionTitle,
	a.ReviewerAssigned, a.Review, a.ReviewFile, 
	c.DescriptionDecision as AEDecision, d.DescriptionDecision as MEDecision
	from manuscriptAssignment a
	join decisions b on a.SubmissionTitle = b.SubmissionTitle
    join statuses c on c.DecisionID = b.AEDecision
	join statuses d on d.DecisionID = b.MEDecision
	where (a.SubmissionTitle like '%$searchValue%') and (AssocEditorAssign = '')");
	
echo "Search Results";
echo "<table border='1'>
<tr>
	<th>JBIN</th>
	<th>Author</th>
	<th>Title</th>
	<th>Reviewer Assigned</th>
	<th>Review</th>
	<th>Review file</th>
	<th>Associate Editor Decision</th>
	<th>Managing Editor Decision</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['ReviewerAssigned'] . "</td>";
echo "<td>" . $row['Review'] . "</td>";
echo "<td>" . $row['ReviewFile'] . "</td>";
echo "<td>" . $row['AEDecision'] . "</td>";
echo "<td>" . $row['MEDecision'] . "</td>";
echo "</tr>";
}
echo "</table>";
}

  


mysqli_close($con);

 ?> 
 
<br><a href="/chiefEditorMain.php/">Editor in Chief main</a><br>


<?php
} else {
header('Location: /view.php/'); //change link to redirect user
}?> 