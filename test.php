<!doctype html>
<html>
<head>
<title>PHP Varibales and Arrays</title>
<meta charset="utf-8">


</head>
<body>

<h1>Welcome to my PHP Site</h1>

<?php 

echo "<h2>Bella's First PHP Page!</h2>";

print '<br>';
print "Coding in PHP is Fun!";

echo'<br>';

//$greeting = "Good afternoon";

//echo $greeting;

echo'<br>';
//print ${greeting};

date_default_timezone_set('EST');

$hour = date('G');

if ($hour < 12) {

    $greeting = "Good morning!";
}
elseif ($hour < 19) {
    $greeting = "Good afternoon!";
}
else {
    $greeting = "Good day!";
}


echo $greeting;
echo'<br>';
echo'<hr>';

$day = date('D');

switch($day){
case('Mon'):
    echo"Oh no, it's Monday";
    break;
case('Tue'):
    echo"Still Tuesday";
    break;
case('Wed'):
    echo"Still Still Wednesday";
    break; 
case('Thu'):
    echo"Happy Thursday!!";
    break;           

}

echo'<br>';
echo'<hr>';

$linkName ="heart";
$linkImage = "heart.png";
$linkAddress = "https://www.w3schools.com";

echo $linkName;
echo'<br>';
echo '<img src="'.$linkImage.'" width="300">';
echo'<br>';
echo '<a href="'.$linkAddress.'" target="_blank">'.'heart'.'</a>';
echo'<br>';

$people = array('John Doe','Peter Merril','Mary Hill');
echo $people['0'];
echo'<br>';
echo $people['1'];
echo'<br>';
echo'<hr>';

$data['first'] = "Hillary Fox";
$data['second'] = "Nina Hudson";
$data['last'] = "Alice Doe";

echo $data['first'];
echo'<br>';
echo $data['second'];







?>



</body>


</html>