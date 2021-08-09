<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>First PHP</title>
</head>
<body>

<!--nav section-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
        <a href="../index.php" class="navbar-brand" style="color: #DA6419">My Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav">
                    <li class="navbar-item active"><a href="../about.php" class="nav-link" style="color: #28A3B6">About</a></li>
                    <li class="navbar-item"><a href="../portfolio.php" class="nav-link" style="color: #28A3B6">Portfolio</a></li>
                    <li class="navbar-item"><a href="../contact.php" class="nav-link" style="color: #28A3B6">Contact</a></li>
                    <li class="navbar-item"><a href="../first.php" class="nav-link" style="color: #28A3B6">PHP</a></li>
                    <li class="navbar-item"><a href="../weather.php" class="nav-link" style="color: #28A3B6">Weather</a></li>
                </ul>
            </div>
        </nav>

        <?php
    $hostname = "php-mysql-exercisedb.slccwebdev.com";
    $username = "phpmysqlexercise";
    $password = "mysqlexercise";
    $databasename = "php_mysql_exercisedb";

    //Variables for development
    $name = "John Doe";
    $email = "jd@email.com";
    $contactBack = "Yes";
    $comments = "Please contact me back at your earliest convenience.";
    try {
        //Create NEW PDO object
        $conn = new PDO("mysql:host=$hostname; dbname=$databasename", $username, $password);

        //Set PDO error mode to exception
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        
        //Variable containing SQL command
        $sql = "INSERT INTO jf_sum21_Contacts (name, email, contactBack, comments)
                VALUES (:name, :email, :contactBack, :comments);";
        
        //Execute SQL statement on server
        $stmt = $conn -> prepare($sql);

        //Bind parameters to variables
        $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
        $stmt -> bindParam(':email', $email, PDO::PARAM_STR);
        $stmt -> bindParam(':contactBack', $contactBack, PDO::PARAM_STR);
        $stmt -> bindParam(':comments', $comments, PDO::PARAM_STR);

        //Execut statement on server
        $stmt -> execute();
         //echo "<b>The data currently in the database:</b><br>\n";
         //foreach($conn -> query($sql) as $row){
           //echo $row['contactID'] . " | ";
           //echo $row['name'] . " | ";
           //echo $row['email']. " | ";
           //echo $row['contactBack'] . " | ";
           //echo $row['comments'] . " | ";
           //echo $row['dateSent'] . "<br>\n";
         //}
        
         //Get the id of the last row added
        $last_id = $conn -> lastInsertId();
        
        //Send success message to screen
        echo "A new record was added successfully.<br> 
        The last inserted ID is: " . $last_id;
    } catch (PDOException $error) {
        //Return error code if one is created
        echo "An error occured: <br>" . $sql . "<br>" . $error-> getMessage();
    }
    $conn = null;
?>
<h1 class="text-center text-primary py-2">PHP Practice Excercises</h1> 
<!--php echo statements-->
<h4 class="text-primary text-left">Echo Statements</h4>
<?php
$greeting = "Hello World!";
echo $greeting . "<br>";
$numOne = 4;
$numTwo = 5;
echo $numOne / $numTwo . "<br>";
echo $numOne + $numTwo . "<br>";
echo $numOne * $numTwo . "<br>";
?>

<!--PHP skill array-->
<h4 class="text-primary text-left">Skills Array</h4>
<?php
    $skills = array("HTML", "CSS", "JavaScript", "PHP/MySQL");
    function newList($array){
      echo "<ul>";
      foreach($array as $value){
      echo "<li>$value</li>";
      }
      echo "</ul>";
    }
      echo "My skills include:";
      newList($skills);
    
  ?>
<!--Week 2 Excercises-->
<h4 class="text-primary text-left">If Statement Excercise</h4>
  <?php
  $int = 10;
  if ($int === 10) {
    echo "This is TRUE!<br>";
  }
  ?>
  <h4 class="text-primary text-left">Single Parameter Excercise</h4>
<?php
  function newGreeting($name){
    echo "<h1>Welcome $name</h1><p>Thank you for visiting my site today.</p>";
  }
  newGreeting(John);
?>
<h4 class="text-primary text-left">Multiple Parameter Function Excercise</h4>
<?php
  function otherGreeting($name, $day){
    echo "<h1>Welcome $name</h1><p>It's a beautiful $day !</p>";
  }
  otherGreeting("John", "Friday");
?>
<h4 class="text-primary text-left">Return From Value Excercise</h4>
<?php
function sum($x, $y){
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " .sum(5, 10) . "<br>";
echo "14 + 24 = " . sum(14, 24) . "<br>";
echo "6 + 98 = " . sum(6, 98) . "<br>";
?>
<h4 class="text-primary text-left">Indexed Array Excercise</h4>
<?php
$favColors = ["Green", "Purple", "Blue", "Pink"];
echo "<h4>My favorite colors include: </h4><ul>";
foreach($favColors as $c){
  echo "<li> $c </li>";
}
echo "</ul>";
echo "<h4>But my absolute favorite colors is:</h4><br>" . $favColors[1];
?>
<h4 class="text-primary text-left">Associative Array Excercise</h4>
<?php
$people = ["Jake" => "Gray", "Stohl" => "Black", "John" => "Green", "Steve" => "Brown"];
echo "<h4>My friends favorite colors are:</h4><ul>";
foreach($people as $v => $v_value){
  echo "<li>" . $v . "'s favorite color is " . $v_value . "</li>";
}
echo "</ul>";
?>
<h4 class="text-primary text-left">Array Count Excercise</h4>
<?php
$colors = array("Red", "Green", "Orange", "Blue", "Pink", "Red Orange", "Light Blue", "Orange Green", "Sky Blue", "Purple");
echo "There are " . count($colors) . " items in the array<br>";
?>
<h4 class="text-primary text-left">if statement</h4>
<?php
$newInt = 7;
if ($newInt === 4) {
  echo "This is true.<br>";
}else{
  echo "This is false.<br>";
}
?>
<h4 class="text-primary text-left">if/else if statement</h4>
<?php
$integer = 7;
if ($integer == 5) {
  echo "The variable is 5!<br>";
} else if($integer > 5){
  echo "The variable is greater than 5.<br>";
} else {
  echo "The variable is less than 5.<br>";
}
?>
<h4 class="text-primary text-left">Switch Statement</h4>
<?php
$num = 3;
switch ($num) {
  case '1':
    echo "Your number is $num<br>";
    break;
  case '2':
    echo "Your number is $num<br>";
    break;
  case '3':
    echo "Your number is $num<br>";
    break;
  default:
    echo "You don't know how to do this.<br>";
    break;
}
?>
<h4 class="text-primary text-left">While Loop</h4>
<?php
$num1 = 1;
while($num1 <= 10){
  echo "The number is $num1<br>";  
  $num1++;
}
?>

<h4 class="text-primary text-left">Do While Loop</h4>
<?php
$othNum = 1;
do {
  echo "The number is $othNum<br>";
  $othNum++;
} while ($othNum <= 10);
?>

<h4 class="text-primary text-left">For Loop</h4>
<?php
for($x = 0; $x <= 10; $x++){
  echo "Your number is: $x <br>";
}
?>

<h4 class="text-primary text-left">foreach</h4>
<?php
$colors = ["red", "blue", "brown"];
echo "My favorite colors are:<br>";
foreach($colors as $value){
  echo "$value<br>";
}
?>






<!--footer section-->

<footer class="py-4 bg-dark">
    <div class="container">
      <p class="m-0 text-right text-white footer">Copyright &copy; John's Website 2021</p>
    </div>
</footer>

    <!--Scripts-->
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>