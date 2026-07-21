<?php

    echo"<h1>Switch Case</h1>";

    $favColor = "purple";
    switch($favColor){
        case "red":
            echo "Your favorite color is red!";
            break; //Stops the execution
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "purple":
            echo"Your favorite color is purple!";
            break;
        default:
            echo "Your favorite color is neither red nor blue!";
    }

    echo"<hr><br><br>";

    $choice = "Cappuccino";
    switch($choice){
        case "Coffee":
            $price = 1.00;
            break;
        case "Tea":
            $price = 0.80;
            break;
        case "Cappuccino":
            $price = 5.00;
            break;
        case "Orange":
            $price = 2.50;
            break;
        default: 
            $price = 0;
            echo"Invalid choice";
    }

    $total=$price * 15;

    echo"Item: ". $choice . "<br>";
    echo"Price: RM" . number_format($price, 2) ."<br>";
    echo"Total for 15 unit: RM" .number_format($total, 2);

    echo"<hr><br><br>";
    echo"<h1>Looping</h1>";

    for($x=0; $x <=10; $x +=2){
        echo"Even number: $x<br>";
    }

    echo"<h3>While Loop</h3>";
    
    $i = 1;
    while($i <=5){
        echo"The number is: $i <br>";
        $i++;
    }

    echo"<h3>Do While Loop</h3>";

    $b = 1;

    do{
        echo"The number is: $b <br>";
        $b++; //Increment
    }while($b <=5);

    echo"<h3>Foreach Loop</h3>";

    //Array
    $students = ["Abu", "Raj", "Nilam"];

    foreach($students as $name){
        echo"Student Name: $name<br>";
    }

    echo"<h3>Multiplication Table for 5</h3>";

    $b = 1;

    do{
        echo"<br>$b x 5 =" .($b*5). "<br>";
        $b++;
    }while($b <=12);

    echo"<hr><br>";
    echo"<h1>Functions</h1>";

    function greetStudent($name)
        {
            echo"Hello $name, Welcome to Full Stack class!<br>";
        }

        greetStudent("Irfan");

    
    function calculateTotal($price,$quantity){
        $total = $price * $quantity;
        return $total; //Sends the result back
    }
    $bill = calculateTotal(10,5);
     echo"<br>Total Bill: RM" .$bill;

     echo"<hr><br>";

    function checkBMI($weight, $height)
    {
        $bmi = $weight / ($height * $height);
        return $bmi;
    }

    // Example usage
    $weight = 70;   // kg
    $height = 1.75; // meters

    $myBMI = checkBMI($weight, $height);
    echo "Your BMI is: " . number_format($myBMI, 2);

    
?>