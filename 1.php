<!DOCTYPE html>

<html>

<head>
    <title>Factorial Program using loop and function in PHP</title>
</head>

<body>
    <form method="post">
        Enter the Number:<br>
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php

    //calculate_factorcal

    // calculate factorcal number for given number by creating and using function 
    // the way of it 

    /*
    <?php  
$num = 4;  
$factorial = 1;  
for ($i=$num; $i>=1; $i--)   
{  
  $factorial = $factorial * $i;  
}  
echo "Factorial of $num is $factorial";  
?>  
*/
    if ($_POST) {
        $fact = 1;
        //getting value from input text box 'number'  
        $number = $_POST['number'];
        echo "Factorial of $number:<br><br>";
        //start loop  
        for ($i = 1; $i <= $number; $i++) {
            $fact = $fact * $i;
        }
        echo $fact . "<br>";
    }

    ?>
</body>

</html>