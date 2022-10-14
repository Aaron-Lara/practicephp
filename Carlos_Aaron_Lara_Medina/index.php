<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP page</h1>
    <?php 
    
    //This is a single-line comment
    #This is also a single-line comment
    echo "Hello World! <br>";
    Echo "Hello World! <br>";
    ECHO "Hello World! <br>";
    eChO "Hello World! <br>";

    $color = "red";
    echo "My car is ". $color. "<br>";
    echo "My house is ". $COLOR . "<br>";
    echo "My boat is ". $coLOR . "<br>";
    //The variables need to be write exactly as they were declare to work.

    //echo has no return value, take multiple parameters
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello World! <br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    print "<h2>PHP is Fun! </h2>";
    print "Hello World!<br>";
    print "I'm about to learn PHP!<br>";

    // $age = 13.555;
    // var_dump($age);

    $grade = 32;
    var_dump($grade);
    echo "<br>";

    if ($grade >= 60) {
        echo "First Division";
    } else if ($grade >= 45) {
        echo "Second Division";
    } else if ($grade >= 33) {
        echo "Third Division";
    } else{
        echo "Failed";
    } 
    echo "<br>";

    //echo ($grade >= 60) ? "First Division" : "Second Division";
    
    ?>
    
</body>
</html>