<!DOCTYPE html>
<html>
<head>
<title>Vocab</title>
<link href="css.css" rel="stylesheet">
<style>
h1{
	font-size:40px;
}
h2, h3{
	text-decoration: none;
}
h3{
	font-size:20px;
}
</style></head>
<body>
<h1>Vocab Builder</h1>
<div id=navlist><ul><li><a style="color:rgba(225,225,225,0)">Vocab</a></li></ul></div>

<?php 
//Opens connection to server
$word1=$_POST["word"];
$word=$word1.trim();
echo("hi");
echo("<h2>".$word."</h2>");
if(!$word){
	echo "<h2>Unable to fin d word</h2><h3>Please try again.</h3>";
}else{
	echo("<script type=\"text/javascript\">
	window.open('https://www.collinsdictionary.com/dictionary/english-hindi/".$word."', '_blank');
	window.open('http://google.com/search?q=".$word." meaning', '_blank');
	window.open('http://google.com/search?q=english to hindi ".$word."', '_blank');
	window.open('https://www.merriam-webster.com/thesaurus/".$word."', '_blank');
	window.open('https://www.dictionary.com/browse/".$word."', '_blank');
	window.open('https://www.thesaurus.com/browse/".$word."', '_blank');
	</script>");
	echo("<a href=\"http://localhost/GRE/index.php\"><button style=\"width: 20%;
	margin-left: 40%;\" id=\"formbutton\" type=\"submit\">Search Again</button></a>");
}
?>
</body>
</html>