<?php
        
        echo"<h2>Koperasi PKT</h2>";

        $name="Ali";
        $quantity = 5;
        $price_per_item=4.00;
        $total=$quantity*$price_per_item;

        $price_after_disc= $total - 2.00;
        $sst = $price_after_disc * 0.06;

        $final_price = $price_after_disc + $sst;

        echo"Name:  $name<br><tr>";
        echo"Quantity:   $quantity";

        echo"<hr>";
        //Using Shorthand Assignment Operators
        echo"Value = 15<br>";

        $x = 15;  //Assign the value 15
        $x += 15; //Addition assignment(x = x + 15);
        $x -=15; //Subtraction assignment(x = x - 15)
        $x *=15;  //Multiplication assignment(x = x * 15)
        $x /=15; //
        $x %=15;

        echo"Result = $x";

        echo"<hr>";

        echo "Value  x=90; <br> Value y=90<br><br>";
        $x =90;
        $y ="90";

        if($x >= $y){
            echo "True";
        }else{
            echo"False";
        }

        echo"<hr>";

        $age=12;
        $hasLicense = false;

        //Comparison : ($age >=18)
        //Logical &&

        if($age >=18 || $hasLicense == true){
            echo"You are allowed to drive";
        }else{
            echo"Your are not allowed to drive";
        }

        echo"<hr>";

        $language="arab";
        $name = ",عرفان";

        if($language == 'en'){
            echo "Hi, Good Morning " .$name;
        }elseif($language == 'arab'){
            echo" هاي، سلامت ڤاڬي$name ";
        }elseif($language == 'my')
            echo"Hai, Selamat Pagi " .$name;
        else{
            echo"Hey ".$name;
        }

        echo"<hr>";

        $name="Minah";
        $citizen="Warganegara";
        $age=19;

        if($citizen == "Warganegara" && $age >=18){
            echo"Eligible to vote";
        }else{
            echo"Not Eligible to vote";
        }

        echo"<br>";
        $status=($age >=18)? "Eligible" : "Not Eligible";
        echo"Voting Status: " .$status;

        echo"<hr>";

        $stud1="Abu";
        $stud2="Raj";
        $mark1=75;
        $mark2=85;

        if
?>