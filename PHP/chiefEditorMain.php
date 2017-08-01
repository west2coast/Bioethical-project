<?php
    ob_start();?>
<body id="body1">
	<div id="header">
		<img src="image/title.png" width="423px" height="126px">
	</div>
		
	<br>
	<br>
	<div class="wrapper">
  <div id="content">
<?php echo "<link rel='stylesheet' type='text/css' href='stylesheet.css' />"; php?>

<?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if($role == '1'){
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>CheifEditorMain</title>
</head>
<body>
<div class="a">	
<a href="/changeUserRoles.php/">Change user roles</a><br>
<a href="/submissionStatus.php/">Submission status</a><br>
<a href="/submissionsAndFiles.php/">Submission and files</a><br>
<a href="/submitterdata.php/">All information from new submissions</a><br>
<a href="/search.php/">Search</a><br>
<a href="/assignfinaldecision.php/">Assign Decision</a><br>
</div>
</body>
</html>
	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>

<?php
    } else {
        header('Location: /loginC.html/'); //change link to redirect user
        ob_end_flush();
    }?>