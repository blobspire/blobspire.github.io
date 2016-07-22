<!DOCTYPE html> 
<html>
<head>
<title> Blobspire - Let's change the world 
</title>
<style>
body {
    font-size: 100%;
}

h1 {
    font-size: 5em;
}

h2 {
    font-size: 3.5em;
}

p {
    font-size: 2.8em;
	text-align: center;
	font-weight: bold;
}
#reload{
margin:auto;
text-align:center;
}
</style>
</head>
<!-- <body style="background-color:powderblue;"> -->


<form id="reload">
<input type="image" src="blueSquareContracting.gif" onclick="" align="middle" width="800" height="10" />
</form>

<h1 align="center">Welcome to Blobspire!</h1>
<h2 align="center">Relax, Explore, Learn</h2>

<form id="reload">
<input type="image" src="blueSquareContracting.gif" onclick="" align="middle" width="800" height="10" />
</form>
<br>
<br>
<br>
<br>
<br>
<input type="image" src="greenArrowClipart.png" onclick="blobNumber()" width="300" height="200" align="left"/>
<input type="image" src="hollowRedSpeedBubbleArt.png" onclick="submitBlob()" align="right" width="300" height="200" />

<div id="reload">
<img src="whiteBackground.jpg" style="width:750px;height:80px;">
</div>

<script>
function blobNumber() {
	var number = Math.floor((Math.random() * 2) + 1); 

	switch (number) {
    case 1:
        var top = "Hard work beats talent, when talent doesn't work hard. <br> - Kevin Durant";
        break;
    case 2:
        var top = "Fascinating narrative...";
        break;
    }
document.getElementById("topText").innerHTML = top;

}

function submitBlob() {
    var text =prompt("Thank you for helping to build our collection! Please (exactly) enter the message. Ex: facts, history, exercises, life hacks, skills, etc!");

}

</script>

<form action="developBlobspirePHP.php" method="post">
    Which is your favorite movie?
    <input type="text" name="formMovie" maxlength="50" value="<?=$varMovie;?>">
 
    What is your name?
    <input type="text" name="formName" maxlength="50" value="<?=$varName;?>">
 
    <input type="submit" name="formSubmit" value="Submit">
</form>

<?php
if($_POST['formSubmit'] == "Submit") 
{
  $errorMessage = "";
 
  if(empty($_POST['formMovie'])) 
  {
    $errorMessage .= "<li>You forgot to enter a movie!</li>";
  }
  if(empty($_POST['formName'])) 
  {
    $errorMessage .= "<li>You forgot to enter a name!</li>";
  }
 
  $varMovie = $_POST['formMovie'];
  $varName = $_POST['formName'];
 
  if(!empty($errorMessage)) 
  {
    echo("<p>There was an error with your form:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  } 
 
}
    
?>

<?php
if($errorMessage != "") 
{
  echo("<p>There was an error:</p>\n");
  echo("<ul>" . $errorMessage . "</ul>\n");
} 
else
{
  $fs = fopen("mydata.csv","a");
  fwrite($fs,$varName . ", " . $varMovie . "\n");
  fclose($fs);
 
  //header("Location: thankyou.html");
  exit;
}
?>

<br>

<p id="topText">Press the green arrow to begin!</p>

</body>
</html>