<!DOCTYPE html>
<html>
<head>
<title>Vocab Builder</title>
<link href="css.css" rel="stylesheet">

<style>
form{
	text-align: center;
}
h1{
	font-size:40px;
}
fieldset{
	width: 20%;
	margin-left: 40%;
}
</style>
</head>
<body>
<h1>Vocab Builder</h1>
<div id=navlist><ul><li><a style="color:rgba(225,225,225,0)">Vocab</a></li></ul></div><br/>
  
  <fieldset><legend align="center">Search Vocab</legend>
  <form action="search.php" method="POST">
        <br><label for="name">Word</label><br><br><input type="text" id="word" name="word" autocomplete="off"><br><br>
  <button id="formbutton" type="submit">Submit</button>
</form>
</fieldset>

</body>
</html>