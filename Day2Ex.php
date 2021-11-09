<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ExDAY2-Y-S</title>
</head>

<body>
       <p>GET METHOD</p >
       <form action= "Day2Ex.php" method= "GET">
           Name: <input type="text"   name="name" />
           Age: <input type= "text"  name="age" />
           <input  type="submit"  name="submit" />
        </form>
       <?php
       if(isset($_GET[ 'submit']))
       {
           if( $_GET["name"] && $_GET["age" ] )
           {
               echo "Welcome ". $_GET['name']. "<br />";
               echo "You are ". $_GET['age' ]. " years old.";}
            else if ($_GET ["name"] ) 
       {
            echo 'please insert your age too'; 
           
            }
            else if ($_GET ["age"] ) 
            {
                 echo 'please insert your name too'; 
                
                 }
        }
           ?>


<br>
<?php


function adding($num1, $num2, $num3, $sum4){
    $sum = $num1 * $num2 + $num3 / $sum4 ;
    return $sum;

}
    $sum = adding(3, 4, 5, 3);
    echo $sum;

   ?> 

<br>
<br>
<br>
<br>

<?php
       $marks = array(
           "Georg" => array
               (
               "Physics" => 35,
               "Maths" => 30,
               "Chemistry"  => 39
               ),
           "Lisa" =>  array
               (
               "Physics" => 30,
               "Maths" => 32,
               "Chemistry"  => 29
               ),
           "Eric" =>  array
               (
               "Physics" => 31,
               "Maths" => 22,
               "Chemistry" => 39
               )
           );
       
       echo "Marks for Georg in Physics: ";
       echo $marks['Georg']['Physics'] . "<br/>" ;
       echo "Marks for Lisa in Maths: ";
       echo $marks['Lisa']['Maths'] . "<br/>" ;
       echo "Marks for Eric in Chemistry:"
       echo $marks['Eric']['Chemistry'] .  "<br/>" ;

       

    ?>


</body>
</html>