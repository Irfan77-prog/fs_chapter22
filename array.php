<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <hr>
    <h3>1. Numeric Array</h3>
    <?php
        //Creating a numeric array 
        $colors = ["Red", "Green", "Blue"];

        echo $colors[0]. "<br>";
        echo $colors[1]. "<br><br>";  
        
        $colors[]="Pink";
        $colors[0]="Yellow";


         // Looping through the array using for loop
        for ($i = 0; $i < count($colors); $i++) {
        echo "Color: " . $colors[$i] . "<br>";
        }
 
    ?>

    <h3>2. Associative Arrays</h3>
    <?php
    $student_age =[
        "Abu" => 20,
        "Raj" => 22,
        "Nilam" => 19
    ];

    echo"Abu is " . $student_age["Abu"]. " years old.<br><br>";

    //Looping using foreach loop
    foreach($student_age as $name => $age){
        echo "$name is $age years old.<br>";
    }


    ?>

    <h3>3. Multidimensional Array</h3>
    <?php
    $student = [
        ["Abu", 20, "Perak"],
        ["Raj", 22, "Johor"],
        ["Nilam", 19, "Kedah"]
    ];

    //Accessing: [Row][Column]
    echo $student[0][0]. "<br>"; //Output Abu
    echo $student[2][2]. "<br>"; //Output Kedah

    echo "<hr><br>";

    foreach($student as $data){
        echo "Name : ".$data[0]."<br>Age : ". $data[1]."<br>State : ". $data[2]."<br><br>";
        echo "<hr>";
    }

    ?>
</body>
</html>