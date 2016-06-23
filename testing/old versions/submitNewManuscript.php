<?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if($role == '1' || $role == '3'){
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Manuscript submission</title>
</head>
<body>
<table>
<form action="/submitManuscript.php" method="POST">
	<tr>
	<td><th>Manuscript submission form</th></td>
	</tr>
	<tr>
	<td>Select article type:</td>
	<td>
	<select id="manuscripts" name="manuscripts">
		<option value="Original Research">Original Research</option>
		<option value="Theoretical Article">Theoretical Article</option>
		<option value="Review Article">Review Article</option>
		<option value="Meta-Analysis">Meta-Analysis</option>
		<option value="Case Study or Applied Report">Case Study or Applied Report</option>
		<option value="Response to an Article or Case">Response to an Article or Case</option>
		<option value="Recent Developments">Recent Developments</option>
		<option value="Critical Perspectives">Critical Perspectives</option>
		<option value="Editorial or Opinion">Editorial or Opinion</option>
		<option value="Letter to Editor">Letter to Editor</option>
		<option value="Book, Film, or Art Review">Book, Film, or Art Review</option>
		<option value="Other">Other</option>
	</select><td>
	</tr>
	<tr><td>Enter symposium title</td><td></td></tr>
	<tr>
	<td>if symposium is selected:</td>
	<td><input type="text" id="symposiumTitle" name="symposiumTitle" maxlength="100"/></td>
	</tr>
	<tr>
	<td>Enter full title of submission:</td>
	<td><input type="text" id="title" name="title" maxlength="1000" required/>* required</td>
	</tr>
	<tr>
	<td>Add authors</td>
	</tr>
	<tr><td>Multiple academic degrees maybe added to the author names<td></tr>
	<tr>
	<td>First author:</td>
	<td><input type="text" id="firstAuthor" name="firstAuthor" maxlength="50" required/>* required</td>
	</tr>
	<tr>
	<td>Second author:</td>
	<td><input type="text" id="secondAuthor" name="secondAuthor" maxlength="50"/></td>
	</tr>
	<tr>
	<td>Third author:</td>
	<td><input type="text" id="thirdAuthor" name="thirdAuthor" maxlength="50"/></td>
	</tr>
	<tr>
	<td>Fourth author:</td>
	<td><input type="text" id="fourthAuthor" name="fourthAuthor" maxlength="50"/></td>
	</tr> 
	<tr><td>Please add any additional authors in the comments text area below.</td><td></td></tr>
	<tr><td>Funding information</td></tr>
	<tr>
	<td>Funder name:</td>
	<td><input type="text" id="funderName" name="funderName" maxlength="50"/></td>
	</tr>
	<tr>
	<td>Grant number:</td>
	<td><input type="text" id="grantNumber" name="grantNumber" maxlength="50"/></td>
	</tr>
	<tr>
	<td>Grant recipient:</td>
	<td><input type="text" id="grantRecipient" name="grantRecipient" maxlength="50"/></td>
	</tr>
</table>
	<br>Enter the abstract of your manuscript into the text area below. The abstract may be
	<br>cut and pasted from the word document, however the formatting will be lost.
	<br>Enter abstract<br><textarea id="abstract" name="abstract" rows="10" cols="80"> </textarea><br>
	<br>Enter comments to the editor<br><textarea id="editor" name="editor" rows="10" cols="80"> </textarea><br>
	<br>After hitting submit the next page will allow you to upload your document files.<br>

	
    <input type="submit" value="submit">
</form>

<br><br><a href="/submitterMain.php">Submitter main</a><br>
</body>
</html>

<?php
} else {
header('Location: /view.php'); //change link to redirect user
}?> 