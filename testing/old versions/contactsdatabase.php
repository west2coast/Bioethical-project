<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
</head>
<body>
<?php
   $username="root";
   $password="";
   $database="journal";

   $username=$_POST["Username"];
   $password=$_POST["Password"];
   $firstname=$_POST["firstname"];
   $lastname=$_POST["lastname"];
   $academicdegrees=$_POST["academicdegrees"];
   $organizations=$_POST["organizations"];
   $email=$_POST["email"];


$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  
mysqli_multi_query($con,"INSERT INTO users  (Username, Password)VALUES ( '$username', '$password');

insert into userinfo (ID,First,Last,AcademicDegrees,Organizations,Email) values (LAST_INSERT_ID(), '$firstname', '$lastname','$academicdegrees', '$organizations', '$email')");

mysqli_close($con);

?>
<p>
Congratulations registration was successful<br>
<a href="/index.html/">Return to the main page</a>
</p>

</body>
</html>