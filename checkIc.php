<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check NRIC</title>
</head>
<body>
    
<?php


function extractIC($nric){
    //validate pastikan user masukkan 12 karakter ic
    

    if (strlen($nric) !=12){
        return"Invalid IC Format. Please enter 12 character only!";
    }

//Extract data
$year = substr($nric, 0,2);
$month = substr($nric, 2,2);
$day = substr($nric, 4,2);
$pb = substr($nric, 6,2);

if (in_array($pb,['01','22','23','24'])){
    $negeri = "Johor";
}elseif(in_array($pb,['11','45','46'])){
    $negeri = "Terengganu";
}elseif(in_array($pb,['03'])){
    $negeri = "Kelantan";
}elseif(in_array($pb,['06','32'])){
    $negeri = "Pahang";
}elseif(in_array($pb,['02','25','26'])){
    $negeri = "Kedah";
}else{
    echo "wrong ic";
}

//check gender
$lastDigit = substr($nric,-1);
$gender = ($lastDigit % 2 !=0)? "Male" : "Female";


//convert tahun
$dob_year =($year >26) ? "19" . $year : "20" .$year;
$currentYear=date("Y");
$age=$currentYear - $dob_year;

return "
<strong>IC Number : </strong> $nric <br>
<strong>DOB : </strong> $day - $month - $dob_year <br>
<strong>Gender : </strong> $gender <br>
<strong>Age : </strong> $age <br>
<strong>Place Birth: </strong> $negeri <br>
";
}

echo extractIC("070527030861");

?>

</body>
</html>